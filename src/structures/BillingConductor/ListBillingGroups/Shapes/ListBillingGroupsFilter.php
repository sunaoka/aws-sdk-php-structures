<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Arns
 * @property string|null $PricingPlan
 * @property list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'>|null $Statuses
 * @property bool|null $AutoAssociate
 */
class ListBillingGroupsFilter extends Shape
{
    /**
     * @param array{
     *     Arns?: list<string>|null,
     *     PricingPlan?: string|null,
     *     Statuses?: list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'>|null,
     *     AutoAssociate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
