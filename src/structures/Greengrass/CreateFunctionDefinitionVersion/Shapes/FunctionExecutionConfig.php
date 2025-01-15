<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassContainer'|'NoContainer'|null $IsolationMode
 * @property FunctionRunAsConfig|null $RunAs
 */
class FunctionExecutionConfig extends Shape
{
    /**
     * @param array{
     *     IsolationMode?: 'GreengrassContainer'|'NoContainer'|null,
     *     RunAs?: FunctionRunAsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
