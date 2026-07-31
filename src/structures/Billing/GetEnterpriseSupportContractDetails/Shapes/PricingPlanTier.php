<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tierMinimum
 * @property string|null $tierMaximum
 * @property string $baseCharge
 * @property string $additionalPercentageOfAggregateCharges
 * @property string $aggregateChargesAdjustment
 * @property bool $incremental
 * @property string|null $increment
 * @property string|null $incrementCharge
 */
class PricingPlanTier extends Shape
{
    /**
     * @param array{
     *     tierMinimum: string,
     *     tierMaximum?: string|null,
     *     baseCharge: string,
     *     additionalPercentageOfAggregateCharges: string,
     *     aggregateChargesAdjustment: string,
     *     incremental: bool,
     *     increment?: string|null,
     *     incrementCharge?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
