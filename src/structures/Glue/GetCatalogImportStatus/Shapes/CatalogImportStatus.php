<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogImportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ImportCompleted
 * @property \Aws\Api\DateTimeResult $ImportTime
 * @property string $ImportedBy
 */
class CatalogImportStatus extends Shape
{
    /**
     * @param array{
     *     ImportCompleted?: bool,
     *     ImportTime?: \Aws\Api\DateTimeResult,
     *     ImportedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
