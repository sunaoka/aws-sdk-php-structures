<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogImportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ImportCompleted
 * @property \Aws\Api\DateTimeResult|null $ImportTime
 * @property string|null $ImportedBy
 */
class CatalogImportStatus extends Shape
{
    /**
     * @param array{
     *     ImportCompleted?: bool|null,
     *     ImportTime?: \Aws\Api\DateTimeResult|null,
     *     ImportedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
