<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */

namespace Cayman\Yigao\obj;

/**
 *  下单接口
 * @package Cayman\Yigao\obj
 */
class CreateOrder
{

    /**
     * @var string 合作者订单号
     */
    public $ThirdOrderId='';


    /**
     * @var string 票类编码
     */
    public $TicketTypeId='';


    /**
     * @var float 零售价单位元
     */
    public $RetailPrice;


    /**
     * @var float 结算价
     */
    public $SettlementPrice;


    /**
     * @var int 购买数量
     */
    public $Quantity;


    /**
     * @var string 日期
     */
    public $TravelDate;


    /**
     * @var string 联系人
     */
    public $ContactName;


    /**
     * @var string 手机号
     */
    public $ContactMobile;


    /**
     * @var string 支付方式
     */
    public $PaymentMethod;


    /***
     * @var string OTA 名称
     */
    public $OtaName;


    /**
     * @var object 游完人列表  Name 姓名  Mobile 手机号 IdCardNo 身份证
     */
    public $Tourists;


}