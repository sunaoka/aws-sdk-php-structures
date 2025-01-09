<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class FieldItem extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
