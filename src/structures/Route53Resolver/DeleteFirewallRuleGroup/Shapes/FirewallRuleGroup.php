<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property int|null $RuleCount
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $OwnerId
 * @property string|null $CreatorRequestId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null $ShareStatus
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 */
class FirewallRuleGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     RuleCount?: int|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|null,
     *     StatusMessage?: string|null,
     *     OwnerId?: string|null,
     *     CreatorRequestId?: string|null,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
