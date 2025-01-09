<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property ErrorDetail $ErrorDetail
 */
class TableError extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     ErrorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
