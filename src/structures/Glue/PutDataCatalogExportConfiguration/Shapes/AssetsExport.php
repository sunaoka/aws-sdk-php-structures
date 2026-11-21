<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $S3TablesExport
 */
class AssetsExport extends Shape
{
    /**
     * @param array{S3TablesExport?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
