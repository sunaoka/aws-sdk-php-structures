<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftCredentials|null $credentials
 * @property string|null $databaseName
 * @property string|null $host
 * @property RedshiftLineageSyncConfigurationInput|null $lineageSync
 * @property int|null $port
 * @property RedshiftStorageProperties|null $storage
 */
class RedshiftPropertiesInput extends Shape
{
    /**
     * @param array{
     *     credentials?: RedshiftCredentials|null,
     *     databaseName?: string|null,
     *     host?: string|null,
     *     lineageSync?: RedshiftLineageSyncConfigurationInput|null,
     *     port?: int|null,
     *     storage?: RedshiftStorageProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
