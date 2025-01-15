<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionDefaultExecutionConfig|null $Execution
 */
class FunctionDefaultConfig extends Shape
{
    /**
     * @param array{Execution?: FunctionDefaultExecutionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
