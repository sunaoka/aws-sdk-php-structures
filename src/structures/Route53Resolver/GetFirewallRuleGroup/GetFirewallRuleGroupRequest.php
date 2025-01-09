<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 */
class GetFirewallRuleGroupRequest extends Request
{
    /**
     * @param array{FirewallRuleGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
