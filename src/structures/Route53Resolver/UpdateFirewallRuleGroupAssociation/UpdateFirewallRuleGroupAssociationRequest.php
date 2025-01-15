<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallRuleGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupAssociationId
 * @property int|null $Priority
 * @property 'ENABLED'|'DISABLED'|null $MutationProtection
 * @property string|null $Name
 */
class UpdateFirewallRuleGroupAssociationRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupAssociationId: string,
     *     Priority?: int|null,
     *     MutationProtection?: 'ENABLED'|'DISABLED'|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
