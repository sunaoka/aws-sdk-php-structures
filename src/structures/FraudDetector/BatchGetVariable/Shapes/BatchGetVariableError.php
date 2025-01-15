<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchGetVariable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int|null $code
 * @property string|null $message
 */
class BatchGetVariableError extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     code?: int|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
