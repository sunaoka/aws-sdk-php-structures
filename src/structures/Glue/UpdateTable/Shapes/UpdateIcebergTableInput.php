<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IcebergTableUpdate> $Updates
 */
class UpdateIcebergTableInput extends Shape
{
    /**
     * @param array{Updates: list<IcebergTableUpdate>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
