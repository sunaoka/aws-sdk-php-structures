<?php

namespace Sunaoka\Aws\Structures\Glue\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property bool|null $Param
 */
class CodeGenNodeArg extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string,
     *     Param?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
