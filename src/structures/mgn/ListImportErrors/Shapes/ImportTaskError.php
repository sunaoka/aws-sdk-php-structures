<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportErrorData|null $errorData
 * @property string|null $errorDateTime
 * @property 'VALIDATION_ERROR'|'PROCESSING_ERROR'|null $errorType
 */
class ImportTaskError extends Shape
{
    /**
     * @param array{
     *     errorData?: ImportErrorData|null,
     *     errorDateTime?: string|null,
     *     errorType?: 'VALIDATION_ERROR'|'PROCESSING_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
