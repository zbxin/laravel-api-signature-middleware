<?php

namespace Zbxin\ApiSignature\Exceptions;

use Zbxin\Contracts\Exception;

class SignatureHeaderInvalidException extends Exception
{
    protected $header;

    public function __construct($header)
    {
        $this->header = $header;
        parent::__construct();
    }

    /**
     * 唯一错误代码5位数字，不能以零开头
     *
     * @return integer
     */
    protected function errorCode()
    {
        return 41207;
    }

    /**
     * 错误信息提示
     *
     * @return string
     */
    protected function message()
    {
        return 'Header ' . $this->header . ' Required';
    }

    /**
     * 固定调试信息
     *
     * @return array|null
     */
    protected function debug()
    {
        return [];
    }

    /**
     * Http状态码
     *
     * @return int
     */
    protected function statusCode()
    {
        return 412;
    }

    /**
     * 头部信息
     *
     * @return array
     */
    protected function headers()
    {
        return [];
    }

    /**
     * 内容信息
     *
     * @return array|null
     */
    protected function data()
    {
        return [];
    }
}
