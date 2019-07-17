<?php
/**
 * User: yinzhiqiang
 * Date: 2019-07-16
 * mail: dr_cayman@163.com
 * blog: blog.szwyll.com
 */
namespace drcayman\yigao\obj;

/**
 * 票类查询
 * @package Cayman\Yigao\obj
 */
class GetTicketTypes
{

    /**
     * @var string 查询页索引
     */
    public $PageIndex=1;

    /**
     * @var int 查询数量
     */
    public $PageSize = 20;

    /**
     * @var string 票类编码
     */
    public $TicketTypeId;

}