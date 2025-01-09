<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $OwnerId
 * @property string $CreatorRequestId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 */
class FirewallRuleGroupMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     OwnerId?: string,
     *     CreatorRequestId?: string,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
