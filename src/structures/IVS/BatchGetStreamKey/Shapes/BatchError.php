<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetStreamKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $code
 * @property string|null $message
 */
class BatchError extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
