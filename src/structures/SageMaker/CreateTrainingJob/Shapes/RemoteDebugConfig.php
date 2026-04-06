<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableRemoteDebug
 */
class RemoteDebugConfig extends Shape
{
    /**
     * @param array{EnableRemoteDebug?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
