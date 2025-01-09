<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportErrorData $errorData
 * @property string $errorDateTime
 */
class ExportTaskError extends Shape
{
    /**
     * @param array{
     *     errorData?: ExportErrorData,
     *     errorDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
