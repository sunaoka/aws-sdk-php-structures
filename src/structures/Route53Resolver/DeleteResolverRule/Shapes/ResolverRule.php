<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CreatorRequestId
 * @property string $Arn
 * @property string $DomainName
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'FAILED' $Status
 * @property string $StatusMessage
 * @property 'FORWARD'|'SYSTEM'|'RECURSIVE' $RuleType
 * @property string $Name
 * @property list<TargetAddress> $TargetIps
 * @property string $ResolverEndpointId
 * @property string $OwnerId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 * @property string $CreationTime
 * @property string $ModificationTime
 */
class ResolverRule extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CreatorRequestId?: string,
     *     Arn?: string,
     *     DomainName?: string,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'FAILED',
     *     StatusMessage?: string,
     *     RuleType?: 'FORWARD'|'SYSTEM'|'RECURSIVE',
     *     Name?: string,
     *     TargetIps?: list<TargetAddress>,
     *     ResolverEndpointId?: string,
     *     OwnerId?: string,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME',
     *     CreationTime?: string,
     *     ModificationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
