<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property double|null $Importance
 */
class ColumnImportance extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     Importance?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
