<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property double $Importance
 */
class ColumnImportance extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string,
     *     Importance?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
