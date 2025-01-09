<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallPolicyName
 * @property string $FirewallPolicyArn
 */
class DescribeFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     FirewallPolicyName?: string,
     *     FirewallPolicyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
