<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $limitId
 * @property int<0, 2147483647> $currentCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $displayName
 * @property string $amountRequirementName
 * @property int<-1, 2147483647> $maxCount
 */
class LimitSummary extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     limitId: string,
     *     currentCount: int<0, 2147483647>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     displayName: string,
     *     amountRequirementName: string,
     *     maxCount: int<-1, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
