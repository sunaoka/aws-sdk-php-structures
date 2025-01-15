<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EcsContainerOverride>|null $ContainerOverrides
 * @property string|null $Cpu
 * @property EcsEphemeralStorage|null $EphemeralStorage
 * @property string|null $ExecutionRoleArn
 * @property list<EcsInferenceAcceleratorOverride>|null $InferenceAcceleratorOverrides
 * @property string|null $Memory
 * @property string|null $TaskRoleArn
 */
class EcsTaskOverride extends Shape
{
    /**
     * @param array{
     *     ContainerOverrides?: list<EcsContainerOverride>|null,
     *     Cpu?: string|null,
     *     EphemeralStorage?: EcsEphemeralStorage|null,
     *     ExecutionRoleArn?: string|null,
     *     InferenceAcceleratorOverrides?: list<EcsInferenceAcceleratorOverride>|null,
     *     Memory?: string|null,
     *     TaskRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
