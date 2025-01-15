<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionNamePrefix
 * @property string $stateMachineName
 * @property string $roleArn
 */
class StepFunctionsAction extends Shape
{
    /**
     * @param array{
     *     executionNamePrefix?: string|null,
     *     stateMachineName: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
