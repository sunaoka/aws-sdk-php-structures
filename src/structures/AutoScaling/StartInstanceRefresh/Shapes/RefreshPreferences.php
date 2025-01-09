<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $MinHealthyPercentage
 * @property int<0, max> $InstanceWarmup
 * @property list<int<1, 100>> $CheckpointPercentages
 * @property int<0, 172800> $CheckpointDelay
 * @property bool $SkipMatching
 * @property bool $AutoRollback
 * @property 'Refresh'|'Ignore'|'Wait' $ScaleInProtectedInstances
 * @property 'Terminate'|'Ignore'|'Wait' $StandbyInstances
 * @property AlarmSpecification $AlarmSpecification
 * @property int<100, 200> $MaxHealthyPercentage
 * @property int<0, 172800> $BakeTime
 */
class RefreshPreferences extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int<0, 100>,
     *     InstanceWarmup?: int<0, max>,
     *     CheckpointPercentages?: list<int<1, 100>>,
     *     CheckpointDelay?: int<0, 172800>,
     *     SkipMatching?: bool,
     *     AutoRollback?: bool,
     *     ScaleInProtectedInstances?: 'Refresh'|'Ignore'|'Wait',
     *     StandbyInstances?: 'Terminate'|'Ignore'|'Wait',
     *     AlarmSpecification?: AlarmSpecification,
     *     MaxHealthyPercentage?: int<100, 200>,
     *     BakeTime?: int<0, 172800>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
