<?php

namespace Sunaoka\Aws\Structures\Iot\ListSbomValidationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileName
 * @property 'FAILED'|'SUCCEEDED'|null $validationResult
 * @property 'INCOMPATIBLE_FORMAT'|'FILE_SIZE_LIMIT_EXCEEDED'|null $errorCode
 * @property string|null $errorMessage
 */
class SbomValidationResultSummary extends Shape
{
    /**
     * @param array{
     *     fileName?: string|null,
     *     validationResult?: 'FAILED'|'SUCCEEDED'|null,
     *     errorCode?: 'INCOMPATIBLE_FORMAT'|'FILE_SIZE_LIMIT_EXCEEDED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
