<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $name
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $status
 * @property BillInterval|null $billInterval
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class BillEstimateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null,
     *     billInterval?: BillInterval|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
