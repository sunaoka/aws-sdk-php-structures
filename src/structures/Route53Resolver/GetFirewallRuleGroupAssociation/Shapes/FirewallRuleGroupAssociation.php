<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallRuleGroupAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $FirewallRuleGroupId
 * @property string|null $VpcId
 * @property string|null $Name
 * @property int|null $Priority
 * @property 'ENABLED'|'DISABLED'|null $MutationProtection
 * @property string|null $ManagedOwnerName
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $CreatorRequestId
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 */
class FirewallRuleGroupAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     FirewallRuleGroupId?: string|null,
     *     VpcId?: string|null,
     *     Name?: string|null,
     *     Priority?: int|null,
     *     MutationProtection?: 'ENABLED'|'DISABLED'|null,
     *     ManagedOwnerName?: string|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|null,
     *     StatusMessage?: string|null,
     *     CreatorRequestId?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
