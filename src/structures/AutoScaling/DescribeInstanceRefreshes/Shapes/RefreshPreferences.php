<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinHealthyPercentage
 * @property int $InstanceWarmup
 * @property list<int> $CheckpointPercentages
 * @property int $CheckpointDelay
 * @property bool $SkipMatching
 * @property bool $AutoRollback
 * @property 'Refresh'|'Ignore'|'Wait' $ScaleInProtectedInstances
 * @property 'Terminate'|'Ignore'|'Wait' $StandbyInstances
 * @property AlarmSpecification $AlarmSpecification
 * @property int $MaxHealthyPercentage
 * @property int $BakeTime
 */
class RefreshPreferences extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int,
     *     InstanceWarmup?: int,
     *     CheckpointPercentages?: list<int>,
     *     CheckpointDelay?: int,
     *     SkipMatching?: bool,
     *     AutoRollback?: bool,
     *     ScaleInProtectedInstances?: 'Refresh'|'Ignore'|'Wait',
     *     StandbyInstances?: 'Terminate'|'Ignore'|'Wait',
     *     AlarmSpecification?: AlarmSpecification,
     *     MaxHealthyPercentage?: int,
     *     BakeTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
