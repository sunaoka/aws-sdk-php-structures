<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergInput $IcebergInput
 */
class OpenTableFormatInput extends Shape
{
    /**
     * @param array{IcebergInput?: IcebergInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
