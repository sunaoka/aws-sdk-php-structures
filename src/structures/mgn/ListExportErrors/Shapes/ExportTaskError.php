<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorDateTime
 * @property ExportErrorData|null $errorData
 */
class ExportTaskError extends Shape
{
    /**
     * @param array{
     *     errorDateTime?: string|null,
     *     errorData?: ExportErrorData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
