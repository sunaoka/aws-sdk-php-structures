<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 */
class DescribeLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
