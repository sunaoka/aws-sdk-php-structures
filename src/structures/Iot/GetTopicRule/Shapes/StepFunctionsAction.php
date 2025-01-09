<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionNamePrefix
 * @property string $stateMachineName
 * @property string $roleArn
 */
class StepFunctionsAction extends Shape
{
    /**
     * @param array{
     *     executionNamePrefix?: string,
     *     stateMachineName: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
