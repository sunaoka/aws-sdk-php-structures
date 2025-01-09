<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $id
 * @property string $message
 */
class FieldError extends Shape
{
    /**
     * @param array{
     *     errorCode: string,
     *     id: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
