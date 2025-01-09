<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftCredentials $credentials
 * @property string $databaseName
 * @property string $host
 * @property RedshiftLineageSyncConfigurationInput $lineageSync
 * @property int $port
 * @property RedshiftStorageProperties $storage
 */
class RedshiftPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     credentials?: RedshiftCredentials,
     *     databaseName?: string,
     *     host?: string,
     *     lineageSync?: RedshiftLineageSyncConfigurationInput,
     *     port?: int,
     *     storage?: RedshiftStorageProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
