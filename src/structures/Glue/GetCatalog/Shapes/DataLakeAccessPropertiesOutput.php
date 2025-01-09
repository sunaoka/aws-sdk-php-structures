<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DataLakeAccess
 * @property string $DataTransferRole
 * @property string $KmsKey
 * @property string $ManagedWorkgroupName
 * @property string $ManagedWorkgroupStatus
 * @property string $RedshiftDatabaseName
 * @property string $StatusMessage
 * @property string $CatalogType
 */
class DataLakeAccessPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     DataLakeAccess?: bool,
     *     DataTransferRole?: string,
     *     KmsKey?: string,
     *     ManagedWorkgroupName?: string,
     *     ManagedWorkgroupStatus?: string,
     *     RedshiftDatabaseName?: string,
     *     StatusMessage?: string,
     *     CatalogType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
