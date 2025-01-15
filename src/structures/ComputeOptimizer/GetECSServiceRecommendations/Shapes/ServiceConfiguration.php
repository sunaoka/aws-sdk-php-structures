<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $memory
 * @property int|null $cpu
 * @property list<ContainerConfiguration>|null $containerConfigurations
 * @property 'TargetTrackingScalingCpu'|'TargetTrackingScalingMemory'|null $autoScalingConfiguration
 * @property string|null $taskDefinitionArn
 */
class ServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     memory?: int|null,
     *     cpu?: int|null,
     *     containerConfigurations?: list<ContainerConfiguration>|null,
     *     autoScalingConfiguration?: 'TargetTrackingScalingCpu'|'TargetTrackingScalingMemory'|null,
     *     taskDefinitionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
