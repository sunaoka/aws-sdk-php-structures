<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyName
 * @property string|null $ProxyArn
 */
class DescribeProxyRequest extends Request
{
    /**
     * @param array{
     *     ProxyName?: string|null,
     *     ProxyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
