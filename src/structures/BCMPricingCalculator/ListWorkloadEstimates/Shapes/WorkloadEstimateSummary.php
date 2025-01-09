<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS' $rateType
 * @property \Aws\Api\DateTimeResult $rateTimestamp
 * @property 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED' $status
 * @property double $totalCost
 * @property 'USD' $costCurrency
 * @property string $failureMessage
 */
class WorkloadEstimateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     expiresAt?: \Aws\Api\DateTimeResult,
     *     rateType?: 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS',
     *     rateTimestamp?: \Aws\Api\DateTimeResult,
     *     status?: 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED',
     *     totalCost?: double,
     *     costCurrency?: 'USD',
     *     failureMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
