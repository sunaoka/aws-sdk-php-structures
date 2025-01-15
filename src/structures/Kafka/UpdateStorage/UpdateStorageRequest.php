<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property Shapes\ProvisionedThroughput|null $ProvisionedThroughput
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 * @property int|null $VolumeSizeGB
 */
class UpdateStorageRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput|null,
     *     StorageMode?: 'LOCAL'|'TIERED'|null,
     *     VolumeSizeGB?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
