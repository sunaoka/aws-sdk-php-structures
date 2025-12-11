<?php

namespace Sunaoka\Aws\Structures\Braket\SearchSpendingLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spendingLimitArn
 * @property string $deviceArn
 * @property TimePeriod $timePeriod
 * @property string $spendingLimit
 * @property string $queuedSpend
 * @property string $totalSpend
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class SpendingLimitSummary extends Shape
{
    /**
     * @param array{
     *     spendingLimitArn: string,
     *     deviceArn: string,
     *     timePeriod: TimePeriod,
     *     spendingLimit: string,
     *     queuedSpend: string,
     *     totalSpend: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
