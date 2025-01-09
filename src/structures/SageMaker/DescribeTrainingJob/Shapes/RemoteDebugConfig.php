<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableRemoteDebug
 */
class RemoteDebugConfig extends Shape
{
    /**
     * @param array{EnableRemoteDebug?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
