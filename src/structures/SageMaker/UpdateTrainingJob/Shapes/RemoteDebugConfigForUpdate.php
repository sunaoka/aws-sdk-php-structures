<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableRemoteDebug
 */
class RemoteDebugConfigForUpdate extends Shape
{
    /**
     * @param array{EnableRemoteDebug?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
