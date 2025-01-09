<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Arns
 * @property string $PricingPlan
 * @property list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'> $Statuses
 * @property bool $AutoAssociate
 */
class ListBillingGroupsFilter extends Shape
{
    /**
     * @param array{
     *     Arns?: list<string>,
     *     PricingPlan?: string,
     *     Statuses?: list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'>,
     *     AutoAssociate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
