<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeletePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
