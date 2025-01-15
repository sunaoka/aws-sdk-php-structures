<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Gid
 * @property int|null $Uid
 */
class FunctionRunAsConfig extends Shape
{
    /**
     * @param array{
     *     Gid?: int|null,
     *     Uid?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
