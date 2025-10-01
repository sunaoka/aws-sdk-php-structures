<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchPutFieldOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $errorCode
 * @property string $value
 */
class FieldOptionError extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     errorCode: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
