<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property BillInterval $billInterval
 * @property 'READY'|'LOCKED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $failureMessage
 */
class BillScenarioSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     billInterval?: BillInterval,
     *     status?: 'READY'|'LOCKED'|'FAILED',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     expiresAt?: \Aws\Api\DateTimeResult,
     *     failureMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
