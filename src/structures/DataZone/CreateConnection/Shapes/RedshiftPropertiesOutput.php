<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftCredentials $credentials
 * @property string $databaseName
 * @property bool $isProvisionedSecret
 * @property string $jdbcIamUrl
 * @property string $jdbcUrl
 * @property RedshiftLineageSyncConfigurationOutput $lineageSync
 * @property string $redshiftTempDir
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED' $status
 * @property RedshiftStorageProperties $storage
 */
class RedshiftPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     credentials?: RedshiftCredentials,
     *     databaseName?: string,
     *     isProvisionedSecret?: bool,
     *     jdbcIamUrl?: string,
     *     jdbcUrl?: string,
     *     lineageSync?: RedshiftLineageSyncConfigurationOutput,
     *     redshiftTempDir?: string,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED',
     *     storage?: RedshiftStorageProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
