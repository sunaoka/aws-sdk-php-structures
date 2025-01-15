<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportErrorData|null $errorData
 * @property string|null $errorDateTime
 */
class ExportTaskError extends Shape
{
    /**
     * @param array{
     *     errorData?: ExportErrorData|null,
     *     errorDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
