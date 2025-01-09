<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionDefaultConfig $DefaultConfig
 * @property list<FunctionShape> $Functions
 */
class FunctionDefinitionVersion extends Shape
{
    /**
     * @param array{
     *     DefaultConfig?: FunctionDefaultConfig,
     *     Functions?: list<FunctionShape>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
