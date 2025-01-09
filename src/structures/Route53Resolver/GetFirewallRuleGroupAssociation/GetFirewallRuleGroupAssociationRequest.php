<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupAssociationId
 */
class GetFirewallRuleGroupAssociationRequest extends Request
{
    /**
     * @param array{FirewallRuleGroupAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
