<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3>|null $ErrorCategory
 * @property int<0, 9999>|null $ErrorType
 * @property bool|null $Retryable
 * @property string|null $ErrorMessage
 */
class AthenaError extends Shape
{
    /**
     * @param array{
     *     ErrorCategory?: int<1, 3>|null,
     *     ErrorType?: int<0, 9999>|null,
     *     Retryable?: bool|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
