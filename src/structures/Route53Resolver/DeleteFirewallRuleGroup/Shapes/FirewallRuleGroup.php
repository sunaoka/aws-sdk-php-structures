<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property int $RuleCount
 * @property 'COMPLETE'|'DELETING'|'UPDATING' $Status
 * @property string $StatusMessage
 * @property string $OwnerId
 * @property string $CreatorRequestId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 * @property string $CreationTime
 * @property string $ModificationTime
 */
class FirewallRuleGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     RuleCount?: int,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING',
     *     StatusMessage?: string,
     *     OwnerId?: string,
     *     CreatorRequestId?: string,
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
