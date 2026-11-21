<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportEncryptionConfiguration|null $EncryptionConfiguration
 */
class S3TablesConfiguration extends Shape
{
    /**
     * @param array{EncryptionConfiguration?: ExportEncryptionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
