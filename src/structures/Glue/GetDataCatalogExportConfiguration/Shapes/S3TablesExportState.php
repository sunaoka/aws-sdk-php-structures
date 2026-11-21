<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null $Status
 */
class S3TablesExportState extends Shape
{
    /**
     * @param array{Status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
