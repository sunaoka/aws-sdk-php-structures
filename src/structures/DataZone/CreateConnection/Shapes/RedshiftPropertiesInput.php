<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftStorageProperties|null $storage
 * @property string|null $databaseName
 * @property string|null $host
 * @property int|null $port
 * @property RedshiftCredentials|null $credentials
 * @property RedshiftLineageSyncConfigurationInput|null $lineageSync
 */
class RedshiftPropertiesInput extends Shape
{
    /**
     * @param array{
     *     storage?: RedshiftStorageProperties|null,
     *     databaseName?: string|null,
     *     host?: string|null,
     *     port?: int|null,
     *     credentials?: RedshiftCredentials|null,
     *     lineageSync?: RedshiftLineageSyncConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
