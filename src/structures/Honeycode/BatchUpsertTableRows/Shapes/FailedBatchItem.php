<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $errorMessage
 */
class FailedBatchItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
