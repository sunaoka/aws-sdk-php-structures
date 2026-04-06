<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Arns
 * @property string|null $PricingPlan
 * @property list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|'PENDING'>|null $Statuses
 * @property bool|null $AutoAssociate
 * @property list<string>|null $PrimaryAccountIds
 * @property list<'STANDARD'|'TRANSFER_BILLING'>|null $BillingGroupTypes
 * @property list<StringSearch>|null $Names
 * @property list<string>|null $ResponsibilityTransferArns
 */
class ListBillingGroupsFilter extends Shape
{
    /**
     * @param array{
     *     Arns?: list<string>|null,
     *     PricingPlan?: string|null,
     *     Statuses?: list<'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|'PENDING'>|null,
     *     AutoAssociate?: bool|null,
     *     PrimaryAccountIds?: list<string>|null,
     *     BillingGroupTypes?: list<'STANDARD'|'TRANSFER_BILLING'>|null,
     *     Names?: list<StringSearch>|null,
     *     ResponsibilityTransferArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
