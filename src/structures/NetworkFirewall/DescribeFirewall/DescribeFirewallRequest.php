<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 */
class DescribeFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
