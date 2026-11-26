<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configFileHash
 * @property string|null $configArchiveHash
 * @property \Aws\Api\DateTimeResult|null $configFileLastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $configArchiveLastUpdatedAt
 */
class ConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     configFileHash?: string|null,
     *     configArchiveHash?: string|null,
     *     configFileLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     configArchiveLastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
