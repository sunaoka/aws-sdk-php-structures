<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftStorageProperties|null $storage
 * @property RedshiftCredentials|null $credentials
 * @property bool|null $isProvisionedSecret
 * @property string|null $jdbcIamUrl
 * @property string|null $jdbcUrl
 * @property string|null $redshiftTempDir
 * @property RedshiftLineageSyncConfigurationOutput|null $lineageSync
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property string|null $databaseName
 */
class RedshiftPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     storage?: RedshiftStorageProperties|null,
     *     credentials?: RedshiftCredentials|null,
     *     isProvisionedSecret?: bool|null,
     *     jdbcIamUrl?: string|null,
     *     jdbcUrl?: string|null,
     *     redshiftTempDir?: string|null,
     *     lineageSync?: RedshiftLineageSyncConfigurationOutput|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null,
     *     databaseName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
