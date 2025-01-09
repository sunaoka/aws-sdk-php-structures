<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorMessage
 * @property 'RETRYABLE_ERROR'|'NON_RETRYABLE_ERROR' $ErrorCategory
 */
class ErrorCause extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string,
     *     ErrorCategory?: 'RETRYABLE_ERROR'|'NON_RETRYABLE_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
