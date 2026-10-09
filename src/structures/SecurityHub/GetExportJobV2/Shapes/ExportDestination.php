<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetExportJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportDestination|null $S3
 */
class ExportDestination extends Shape
{
    /**
     * @param array{S3?: S3ExportDestination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
