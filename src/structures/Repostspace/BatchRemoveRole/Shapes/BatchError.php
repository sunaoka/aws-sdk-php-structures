<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchRemoveRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessorId
 * @property int $error
 * @property string $message
 */
class BatchError extends Shape
{
    /**
     * @param array{
     *     accessorId: string,
     *     error: int,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
