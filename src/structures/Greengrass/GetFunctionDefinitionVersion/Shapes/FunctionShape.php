<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionArn
 * @property FunctionConfiguration|null $FunctionConfiguration
 * @property string $Id
 */
class FunctionShape extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string|null,
     *     FunctionConfiguration?: FunctionConfiguration|null,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
