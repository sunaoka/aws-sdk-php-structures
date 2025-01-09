<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Gid
 * @property int $Uid
 */
class FunctionRunAsConfig extends Shape
{
    /**
     * @param array{
     *     Gid?: int,
     *     Uid?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
