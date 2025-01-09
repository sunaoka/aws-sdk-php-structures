<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateFirewallRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupAssociationId
 */
class DisassociateFirewallRuleGroupRequest extends Request
{
    /**
     * @param array{FirewallRuleGroupAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
