<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RollbackReason
 * @property \Aws\Api\DateTimeResult|null $RollbackStartTime
 * @property int<0, 100>|null $PercentageCompleteOnRollback
 * @property int<0, max>|null $InstancesToUpdateOnRollback
 * @property InstanceRefreshProgressDetails|null $ProgressDetailsOnRollback
 */
class RollbackDetails extends Shape
{
    /**
     * @param array{
     *     RollbackReason?: string|null,
     *     RollbackStartTime?: \Aws\Api\DateTimeResult|null,
     *     PercentageCompleteOnRollback?: int<0, 100>|null,
     *     InstancesToUpdateOnRollback?: int<0, max>|null,
     *     ProgressDetailsOnRollback?: InstanceRefreshProgressDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
