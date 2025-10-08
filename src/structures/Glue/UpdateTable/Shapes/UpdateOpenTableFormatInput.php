<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateIcebergInput|null $UpdateIcebergInput
 */
class UpdateOpenTableFormatInput extends Shape
{
    /**
     * @param array{UpdateIcebergInput?: UpdateIcebergInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
