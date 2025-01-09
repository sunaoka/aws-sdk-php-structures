<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetStreamKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $code
 * @property string $message
 */
class BatchError extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     code?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
