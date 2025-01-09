<?php

namespace Sunaoka\Aws\Structures\Omics\BatchDeleteReadSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $code
 * @property string $message
 */
class ReadSetBatchError extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
