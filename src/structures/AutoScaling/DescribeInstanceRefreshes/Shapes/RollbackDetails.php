<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RollbackReason
 * @property \Aws\Api\DateTimeResult $RollbackStartTime
 * @property int<0, 100> $PercentageCompleteOnRollback
 * @property int<0, max> $InstancesToUpdateOnRollback
 * @property InstanceRefreshProgressDetails $ProgressDetailsOnRollback
 */
class RollbackDetails extends Shape
{
    /**
     * @param array{
     *     RollbackReason?: string,
     *     RollbackStartTime?: \Aws\Api\DateTimeResult,
     *     PercentageCompleteOnRollback?: int<0, 100>,
     *     InstancesToUpdateOnRollback?: int<0, max>,
     *     ProgressDetailsOnRollback?: InstanceRefreshProgressDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
