<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $PointInTimeRecoveryEnabled
 * @property int<1, 35>|null $RecoveryPeriodInDays
 */
class PointInTimeRecoverySpecification extends Shape
{
    /**
     * @param array{
     *     PointInTimeRecoveryEnabled: bool,
     *     RecoveryPeriodInDays?: int<1, 35>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
