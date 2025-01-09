<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $memory
 * @property int $cpu
 * @property list<ContainerConfiguration> $containerConfigurations
 * @property 'TargetTrackingScalingCpu'|'TargetTrackingScalingMemory' $autoScalingConfiguration
 * @property string $taskDefinitionArn
 */
class ServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     memory?: int,
     *     cpu?: int,
     *     containerConfigurations?: list<ContainerConfiguration>,
     *     autoScalingConfiguration?: 'TargetTrackingScalingCpu'|'TargetTrackingScalingMemory',
     *     taskDefinitionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
