<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallPolicyName
 * @property string|null $FirewallPolicyArn
 */
class DescribeFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     FirewallPolicyName?: string|null,
     *     FirewallPolicyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
