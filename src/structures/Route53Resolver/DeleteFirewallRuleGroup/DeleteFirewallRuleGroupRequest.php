<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 */
class DeleteFirewallRuleGroupRequest extends Request
{
    /**
     * @param array{FirewallRuleGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
