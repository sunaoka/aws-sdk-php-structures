<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rawError
 */
class ExportErrorData extends Shape
{
    /**
     * @param array{rawError?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
