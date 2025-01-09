<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $status
 * @property BillInterval $billInterval
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 */
class BillEstimateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED',
     *     billInterval?: BillInterval,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     expiresAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
