<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3> $ErrorCategory
 * @property int<0, 9999> $ErrorType
 * @property bool $Retryable
 * @property string $ErrorMessage
 */
class AthenaError extends Shape
{
    /**
     * @param array{
     *     ErrorCategory?: int<1, 3>,
     *     ErrorType?: int<0, 9999>,
     *     Retryable?: bool,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
