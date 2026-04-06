<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorMessage
 * @property 'RETRYABLE_ERROR'|'NON_RETRYABLE_ERROR'|null $ErrorCategory
 */
class ErrorCause extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string|null,
     *     ErrorCategory?: 'RETRYABLE_ERROR'|'NON_RETRYABLE_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
