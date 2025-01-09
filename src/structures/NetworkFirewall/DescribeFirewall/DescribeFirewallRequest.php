<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallName
 * @property string $FirewallArn
 */
class DescribeFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string,
     *     FirewallArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
