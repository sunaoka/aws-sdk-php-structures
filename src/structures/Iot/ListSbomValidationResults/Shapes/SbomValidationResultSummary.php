<?php

namespace Sunaoka\Aws\Structures\Iot\ListSbomValidationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property 'FAILED'|'SUCCEEDED' $validationResult
 * @property 'INCOMPATIBLE_FORMAT'|'FILE_SIZE_LIMIT_EXCEEDED' $errorCode
 * @property string $errorMessage
 */
class SbomValidationResultSummary extends Shape
{
    /**
     * @param array{
     *     fileName?: string,
     *     validationResult?: 'FAILED'|'SUCCEEDED',
     *     errorCode?: 'INCOMPATIBLE_FORMAT'|'FILE_SIZE_LIMIT_EXCEEDED',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
