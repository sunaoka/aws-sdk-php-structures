<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchCreateVariable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $code
 * @property string $message
 */
class BatchCreateVariableError extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     code?: int,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
