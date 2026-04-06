<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $MinHealthyPercentage
 * @property int<0, max>|null $InstanceWarmup
 * @property list<int<1, 100>>|null $CheckpointPercentages
 * @property int<0, 172800>|null $CheckpointDelay
 * @property bool|null $SkipMatching
 * @property bool|null $AutoRollback
 * @property 'Refresh'|'Ignore'|'Wait'|null $ScaleInProtectedInstances
 * @property 'Terminate'|'Ignore'|'Wait'|null $StandbyInstances
 * @property AlarmSpecification|null $AlarmSpecification
 * @property int<100, 200>|null $MaxHealthyPercentage
 * @property int<0, 172800>|null $BakeTime
 */
class RefreshPreferences extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int<0, 100>|null,
     *     InstanceWarmup?: int<0, max>|null,
     *     CheckpointPercentages?: list<int<1, 100>>|null,
     *     CheckpointDelay?: int<0, 172800>|null,
     *     SkipMatching?: bool|null,
     *     AutoRollback?: bool|null,
     *     ScaleInProtectedInstances?: 'Refresh'|'Ignore'|'Wait'|null,
     *     StandbyInstances?: 'Terminate'|'Ignore'|'Wait'|null,
     *     AlarmSpecification?: AlarmSpecification|null,
     *     MaxHealthyPercentage?: int<100, 200>|null,
     *     BakeTime?: int<0, 172800>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
