<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallRuleGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupAssociationId
 * @property int $Priority
 * @property 'ENABLED'|'DISABLED' $MutationProtection
 * @property string $Name
 */
class UpdateFirewallRuleGroupAssociationRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupAssociationId: string,
     *     Priority?: int,
     *     MutationProtection?: 'ENABLED'|'DISABLED',
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
