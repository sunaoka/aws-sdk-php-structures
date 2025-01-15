<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunctionDefaultConfig|null $DefaultConfig
 * @property list<FunctionShape>|null $Functions
 */
class FunctionDefinitionVersion extends Shape
{
    /**
     * @param array{
     *     DefaultConfig?: FunctionDefaultConfig|null,
     *     Functions?: list<FunctionShape>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
