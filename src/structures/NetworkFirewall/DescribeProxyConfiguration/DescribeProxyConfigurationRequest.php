<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 */
class DescribeProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
