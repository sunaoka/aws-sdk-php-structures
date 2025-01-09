<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassContainer'|'NoContainer' $IsolationMode
 * @property FunctionRunAsConfig $RunAs
 */
class FunctionDefaultExecutionConfig extends Shape
{
    /**
     * @param array{
     *     IsolationMode?: 'GreengrassContainer'|'NoContainer',
     *     RunAs?: FunctionRunAsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
