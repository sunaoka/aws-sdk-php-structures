<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergInput|null $IcebergInput
 */
class OpenTableFormatInput extends Shape
{
    /**
     * @param array{IcebergInput?: IcebergInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
