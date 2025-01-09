<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionDefaultExecutionConfig $Execution
 */
class FunctionDefaultConfig extends Shape
{
    /**
     * @param array{Execution?: FunctionDefaultExecutionConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
