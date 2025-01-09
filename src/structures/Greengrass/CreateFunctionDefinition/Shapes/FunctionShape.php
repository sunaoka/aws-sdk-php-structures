<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property FunctionConfiguration $FunctionConfiguration
 * @property string $Id
 */
class FunctionShape extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string,
     *     FunctionConfiguration?: FunctionConfiguration,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
