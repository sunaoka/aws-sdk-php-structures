<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property Datatype $Datatype
 */
class NullValueField extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Datatype: Datatype
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
