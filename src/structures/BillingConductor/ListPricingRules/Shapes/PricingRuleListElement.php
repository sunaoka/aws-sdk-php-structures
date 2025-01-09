<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU' $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING' $Type
 * @property double $ModifierPercentage
 * @property string $Service
 * @property int<0, max> $AssociatedPricingPlanCount
 * @property int $CreationTime
 * @property int $LastModifiedTime
 * @property string $BillingEntity
 * @property Tiering $Tiering
 * @property string $UsageType
 * @property string $Operation
 */
class PricingRuleListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Description?: string,
     *     Scope?: 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU',
     *     Type?: 'MARKUP'|'DISCOUNT'|'TIERING',
     *     ModifierPercentage?: double,
     *     Service?: string,
     *     AssociatedPricingPlanCount?: int<0, max>,
     *     CreationTime?: int,
     *     LastModifiedTime?: int,
     *     BillingEntity?: string,
     *     Tiering?: Tiering,
     *     UsageType?: string,
     *     Operation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
