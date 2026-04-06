<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $CreatorRequestId
 * @property string|null $Arn
 * @property string|null $DomainName
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property 'FORWARD'|'SYSTEM'|'RECURSIVE'|'DELEGATE'|null $RuleType
 * @property string|null $Name
 * @property list<TargetAddress>|null $TargetIps
 * @property string|null $ResolverEndpointId
 * @property string|null $OwnerId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null $ShareStatus
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 * @property string|null $DelegationRecord
 */
class ResolverRule extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CreatorRequestId?: string|null,
     *     Arn?: string|null,
     *     DomainName?: string|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     RuleType?: 'FORWARD'|'SYSTEM'|'RECURSIVE'|'DELEGATE'|null,
     *     Name?: string|null,
     *     TargetIps?: list<TargetAddress>|null,
     *     ResolverEndpointId?: string|null,
     *     OwnerId?: string|null,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null,
     *     DelegationRecord?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
