<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EcsContainerOverride> $ContainerOverrides
 * @property string $Cpu
 * @property EcsEphemeralStorage $EphemeralStorage
 * @property string $ExecutionRoleArn
 * @property list<EcsInferenceAcceleratorOverride> $InferenceAcceleratorOverrides
 * @property string $Memory
 * @property string $TaskRoleArn
 */
class EcsTaskOverride extends Shape
{
    /**
     * @param array{
     *     ContainerOverrides?: list<EcsContainerOverride>,
     *     Cpu?: string,
     *     EphemeralStorage?: EcsEphemeralStorage,
     *     ExecutionRoleArn?: string,
     *     InferenceAcceleratorOverrides?: list<EcsInferenceAcceleratorOverride>,
     *     Memory?: string,
     *     TaskRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
