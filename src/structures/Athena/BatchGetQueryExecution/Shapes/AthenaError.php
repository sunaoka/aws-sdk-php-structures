<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ErrorCategory
 * @property int $ErrorType
 * @property bool $Retryable
 * @property string $ErrorMessage
 */
class AthenaError extends Shape
{
    /**
     * @param array{
     *     ErrorCategory?: int,
     *     ErrorType?: int,
     *     Retryable?: bool,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
