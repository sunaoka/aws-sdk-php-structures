<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorDateTime
 * @property 'VALIDATION_ERROR'|'PROCESSING_ERROR'|null $errorType
 * @property ImportErrorData|null $errorData
 */
class ImportTaskError extends Shape
{
    /**
     * @param array{
     *     errorDateTime?: string|null,
     *     errorType?: 'VALIDATION_ERROR'|'PROCESSING_ERROR'|null,
     *     errorData?: ImportErrorData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
