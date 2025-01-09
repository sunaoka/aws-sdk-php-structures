<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportErrorData $errorData
 * @property string $errorDateTime
 * @property 'VALIDATION_ERROR'|'PROCESSING_ERROR' $errorType
 */
class ImportTaskError extends Shape
{
    /**
     * @param array{
     *     errorData?: ImportErrorData,
     *     errorDateTime?: string,
     *     errorType?: 'VALIDATION_ERROR'|'PROCESSING_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
