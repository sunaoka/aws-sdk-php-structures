<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassContainer'|'NoContainer'|null $IsolationMode
 * @property FunctionRunAsConfig|null $RunAs
 */
class FunctionDefaultExecutionConfig extends Shape
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
