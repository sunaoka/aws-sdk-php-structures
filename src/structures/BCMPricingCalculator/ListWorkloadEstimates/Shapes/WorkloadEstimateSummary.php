<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null $rateType
 * @property \Aws\Api\DateTimeResult|null $rateTimestamp
 * @property 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED'|null $status
 * @property double|null $totalCost
 * @property 'USD'|null $costCurrency
 * @property string|null $failureMessage
 */
class WorkloadEstimateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     rateType?: 'BEFORE_DISCOUNTS'|'AFTER_DISCOUNTS'|'AFTER_DISCOUNTS_AND_COMMITMENTS'|null,
     *     rateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     status?: 'UPDATING'|'VALID'|'INVALID'|'ACTION_NEEDED'|null,
     *     totalCost?: double|null,
     *     costCurrency?: 'USD'|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
