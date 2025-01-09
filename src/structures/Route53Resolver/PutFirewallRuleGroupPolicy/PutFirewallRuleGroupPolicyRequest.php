<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutFirewallRuleGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $FirewallRuleGroupPolicy
 */
class PutFirewallRuleGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     FirewallRuleGroupPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
