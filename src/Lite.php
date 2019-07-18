<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */
namespace drcayman\yigao;


class Lite
{

    protected $username;
    protected $password;
    protected $api_url;
    public function __construct($config)
    {
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->api_url = $config['api_url'];
    }


    /** 执行函数
     * @param string $Method 方法名
     * @param object  $obj 请求参数对象
     * @return array|\Exception|mixed
     */

    public function exec($Method='GetTicketTypes',$obj){

        $RequestBody = base64_encode(json_encode($obj)); //构造数据
        $sign =$this->sign($Method,$RequestBody);
        $data =[
            'UserName'=>$this->username,
            'Method'=>$Method,
            'Sign'=>$sign,
            'RequestBody'=>$RequestBody
        ];
        $result = $this->postData($this->api_url,json_encode($data));
        try{
            $data = json_decode($result,true);
        }catch (\Exception $e){
            return $e;
        }
        $data['ResponseBody'] = json_decode(base64_decode($data['ResponseBody']),true);
        return $data;
    }



    /** 签名
     * @param string $Method 方法名
     * @param string $RequestBody 请求数据
     * @return string
     */
    public function sign($Method ='GetTicketTypes',$RequestBody=''){

        return md5($this->username.$Method.$RequestBody.$this->password);
    }


    /** 验证签名
     * @param string $Method
     * @param string $RequestBody
     * @param $sign
     * @return bool
     */
    public function checkSign($Method ='GetTicketTypes',$RequestBody='',$sign){


        if($sign==md5($this->username.$Method.$RequestBody.$this->password)){

            return true;
        }
        return false;
    }

    public function postData($url, $data, $timeout = 30)
    {
        $ch = curl_init();
        $headers = array(
            "Content-Type:application/json"
        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
        $handles = curl_exec($ch);
        curl_close($ch);
        return $handles;
    }


}