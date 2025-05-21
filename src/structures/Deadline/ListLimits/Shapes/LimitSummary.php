<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $amountRequirementName
 * @property int<-1, 2147483647> $maxCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $farmId
 * @property string $limitId
 * @property int<0, 2147483647> $currentCount
 */
class LimitSummary extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     amountRequirementName: string,
     *     maxCount: int<-1, 2147483647>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     farmId: string,
     *     limitId: string,
     *     currentCount: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
