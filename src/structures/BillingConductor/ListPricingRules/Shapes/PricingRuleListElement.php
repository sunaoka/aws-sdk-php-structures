<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU'|null $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING'|null $Type
 * @property double|null $ModifierPercentage
 * @property string|null $Service
 * @property int<0, max>|null $AssociatedPricingPlanCount
 * @property int|null $CreationTime
 * @property int|null $LastModifiedTime
 * @property string|null $BillingEntity
 * @property Tiering|null $Tiering
 * @property string|null $UsageType
 * @property string|null $Operation
 */
class PricingRuleListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     Scope?: 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU'|null,
     *     Type?: 'MARKUP'|'DISCOUNT'|'TIERING'|null,
     *     ModifierPercentage?: double|null,
     *     Service?: string|null,
     *     AssociatedPricingPlanCount?: int<0, max>|null,
     *     CreationTime?: int|null,
     *     LastModifiedTime?: int|null,
     *     BillingEntity?: string|null,
     *     Tiering?: Tiering|null,
     *     UsageType?: string|null,
     *     Operation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
