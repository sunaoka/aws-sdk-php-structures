<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContainerOverride> $containerOverrides
 * @property string $cpu
 * @property list<InferenceAcceleratorOverride> $inferenceAcceleratorOverrides
 * @property string $executionRoleArn
 * @property string $memory
 * @property string $taskRoleArn
 * @property EphemeralStorage $ephemeralStorage
 */
class TaskOverride extends Shape
{
    /**
     * @param array{
     *     containerOverrides?: list<ContainerOverride>,
     *     cpu?: string,
     *     inferenceAcceleratorOverrides?: list<InferenceAcceleratorOverride>,
     *     executionRoleArn?: string,
     *     memory?: string,
     *     taskRoleArn?: string,
     *     ephemeralStorage?: EphemeralStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
