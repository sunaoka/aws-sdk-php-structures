<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContainerOverride>|null $containerOverrides
 * @property string|null $cpu
 * @property list<InferenceAcceleratorOverride>|null $inferenceAcceleratorOverrides
 * @property string|null $executionRoleArn
 * @property string|null $memory
 * @property string|null $taskRoleArn
 * @property EphemeralStorage|null $ephemeralStorage
 */
class TaskOverride extends Shape
{
    /**
     * @param array{
     *     containerOverrides?: list<ContainerOverride>|null,
     *     cpu?: string|null,
     *     inferenceAcceleratorOverrides?: list<InferenceAcceleratorOverride>|null,
     *     executionRoleArn?: string|null,
     *     memory?: string|null,
     *     taskRoleArn?: string|null,
     *     ephemeralStorage?: EphemeralStorage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
