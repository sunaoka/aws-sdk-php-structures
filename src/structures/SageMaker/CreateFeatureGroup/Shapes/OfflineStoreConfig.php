<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3StorageConfig $S3StorageConfig
 * @property bool|null $DisableGlueTableCreation
 * @property DataCatalogConfig|null $DataCatalogConfig
 * @property 'Default'|'Glue'|'Iceberg'|null $TableFormat
 */
class OfflineStoreConfig extends Shape
{
    /**
     * @param array{
     *     S3StorageConfig: S3StorageConfig,
     *     DisableGlueTableCreation?: bool|null,
     *     DataCatalogConfig?: DataCatalogConfig|null,
     *     TableFormat?: 'Default'|'Glue'|'Iceberg'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
