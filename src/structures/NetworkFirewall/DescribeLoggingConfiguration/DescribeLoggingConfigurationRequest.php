<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string $FirewallName
 */
class DescribeLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string,
     *     FirewallName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
