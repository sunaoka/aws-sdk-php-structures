<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $name
 * @property BillInterval|null $billInterval
 * @property 'READY'|'LOCKED'|'FAILED'|'STALE'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $failureMessage
 */
class BillScenarioSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     billInterval?: BillInterval|null,
     *     status?: 'READY'|'LOCKED'|'FAILED'|'STALE'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
