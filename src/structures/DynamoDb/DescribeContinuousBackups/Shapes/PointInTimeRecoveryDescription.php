<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContinuousBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $PointInTimeRecoveryStatus
 * @property int<1, 35>|null $RecoveryPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $EarliestRestorableDateTime
 * @property \Aws\Api\DateTimeResult|null $LatestRestorableDateTime
 */
class PointInTimeRecoveryDescription extends Shape
{
    /**
     * @param array{
     *     PointInTimeRecoveryStatus?: 'ENABLED'|'DISABLED'|null,
     *     RecoveryPeriodInDays?: int<1, 35>|null,
     *     EarliestRestorableDateTime?: \Aws\Api\DateTimeResult|null,
     *     LatestRestorableDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
