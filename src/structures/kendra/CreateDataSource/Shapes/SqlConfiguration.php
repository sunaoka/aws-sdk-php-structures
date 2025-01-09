<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOUBLE_QUOTES'|'NONE' $QueryIdentifiersEnclosingOption
 */
class SqlConfiguration extends Shape
{
    /**
     * @param array{QueryIdentifiersEnclosingOption?: 'DOUBLE_QUOTES'|'NONE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
