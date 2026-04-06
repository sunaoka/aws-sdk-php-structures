<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftCredentials|null $credentials
 * @property string|null $databaseName
 * @property bool|null $isProvisionedSecret
 * @property string|null $jdbcIamUrl
 * @property string|null $jdbcUrl
 * @property RedshiftLineageSyncConfigurationOutput|null $lineageSync
 * @property string|null $redshiftTempDir
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property RedshiftStorageProperties|null $storage
 */
class RedshiftPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     credentials?: RedshiftCredentials|null,
     *     databaseName?: string|null,
     *     isProvisionedSecret?: bool|null,
     *     jdbcIamUrl?: string|null,
     *     jdbcUrl?: string|null,
     *     lineageSync?: RedshiftLineageSyncConfigurationOutput|null,
     *     redshiftTempDir?: string|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null,
     *     storage?: RedshiftStorageProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
