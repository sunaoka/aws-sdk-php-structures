<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DataLakeAccess
 * @property string|null $DataTransferRole
 * @property string|null $KmsKey
 * @property string|null $ManagedWorkgroupName
 * @property string|null $ManagedWorkgroupStatus
 * @property string|null $RedshiftDatabaseName
 * @property string|null $StatusMessage
 * @property string|null $CatalogType
 */
class DataLakeAccessPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     DataLakeAccess?: bool|null,
     *     DataTransferRole?: string|null,
     *     KmsKey?: string|null,
     *     ManagedWorkgroupName?: string|null,
     *     ManagedWorkgroupStatus?: string|null,
     *     RedshiftDatabaseName?: string|null,
     *     StatusMessage?: string|null,
     *     CatalogType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
