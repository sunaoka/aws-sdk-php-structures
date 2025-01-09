<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataflowGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property bool $Param
 */
class CodeGenNodeArg extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string,
     *     Param?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
