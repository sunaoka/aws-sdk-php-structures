<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateFirewallRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $FirewallRuleGroupId
 * @property string $VpcId
 * @property string $Name
 * @property int $Priority
 * @property 'ENABLED'|'DISABLED' $MutationProtection
 * @property string $ManagedOwnerName
 * @property 'COMPLETE'|'DELETING'|'UPDATING' $Status
 * @property string $StatusMessage
 * @property string $CreatorRequestId
 * @property string $CreationTime
 * @property string $ModificationTime
 */
class FirewallRuleGroupAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     FirewallRuleGroupId?: string,
     *     VpcId?: string,
     *     Name?: string,
     *     Priority?: int,
     *     MutationProtection?: 'ENABLED'|'DISABLED',
     *     ManagedOwnerName?: string,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING',
     *     StatusMessage?: string,
     *     CreatorRequestId?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
