<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */

namespace Cayman\Yigao\obj;


class RequestRefund
{

    /**
     * @var string 分销平台订单号
     */
    public $ListNo;


    /**
     * @var string 合作方退款流水号
     */
    public $RefundId;


    /**
     * @var int 退款 票数
     */
    public $RefundQuantity;

    /**
     * @var string 退款原因
     */
    public $RefundReason;


    /**
     * @var object 退款票号对象
     */
    public $TicketCodes;


}