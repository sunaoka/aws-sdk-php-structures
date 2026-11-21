<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $S3TablesExport
 * @property S3TablesExportState|null $S3TablesExportState
 */
class AssetsExportResult extends Shape
{
    /**
     * @param array{
     *     S3TablesExport?: 'ENABLED'|'DISABLED'|null,
     *     S3TablesExportState?: S3TablesExportState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
