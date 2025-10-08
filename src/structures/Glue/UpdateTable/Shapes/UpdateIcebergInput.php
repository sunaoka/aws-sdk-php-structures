<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateIcebergTableInput $UpdateIcebergTableInput
 */
class UpdateIcebergInput extends Shape
{
    /**
     * @param array{UpdateIcebergTableInput: UpdateIcebergTableInput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
