<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOUBLE_QUOTES'|'NONE'|null $QueryIdentifiersEnclosingOption
 */
class SqlConfiguration extends Shape
{
    /**
     * @param array{QueryIdentifiersEnclosingOption?: 'DOUBLE_QUOTES'|'NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
