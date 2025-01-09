<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $PointInTimeRecoveryStatus
 * @property int<1, 35> $RecoveryPeriodInDays
 * @property \Aws\Api\DateTimeResult $EarliestRestorableDateTime
 * @property \Aws\Api\DateTimeResult $LatestRestorableDateTime
 */
class PointInTimeRecoveryDescription extends Shape
{
    /**
     * @param array{
     *     PointInTimeRecoveryStatus?: 'ENABLED'|'DISABLED',
     *     RecoveryPeriodInDays?: int<1, 35>,
     *     EarliestRestorableDateTime?: \Aws\Api\DateTimeResult,
     *     LatestRestorableDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
