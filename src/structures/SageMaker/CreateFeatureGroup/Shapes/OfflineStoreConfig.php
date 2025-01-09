<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3StorageConfig $S3StorageConfig
 * @property bool $DisableGlueTableCreation
 * @property DataCatalogConfig $DataCatalogConfig
 * @property 'Default'|'Glue'|'Iceberg' $TableFormat
 */
class OfflineStoreConfig extends Shape
{
    /**
     * @param array{
     *     S3StorageConfig: S3StorageConfig,
     *     DisableGlueTableCreation?: bool,
     *     DataCatalogConfig?: DataCatalogConfig,
     *     TableFormat?: 'Default'|'Glue'|'Iceberg'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
