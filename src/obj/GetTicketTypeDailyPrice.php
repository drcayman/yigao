<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */

namespace drcayman\yigao\obj;

/**
 * 价格日历查询
 * @package Cayman\Yigao\obj
 */
class GetTicketTypeDailyPrice
{

    /**
     * @var string 票类编码
     */
    public $TicketTypeId='';

    /**
     * @var string 开始时间 yyyy-MM-dd
     */
    public $StartDate= '2019-07-18';


    /**
     * @var string 结束时间 yyyy-MM-dd
     */
    public $EndDate = '2019-07-19';
}