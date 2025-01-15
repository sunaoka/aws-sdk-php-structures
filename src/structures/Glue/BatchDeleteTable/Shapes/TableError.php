<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property ErrorDetail|null $ErrorDetail
 */
class TableError extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     ErrorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
