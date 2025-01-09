<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property Shapes\ProvisionedThroughput $ProvisionedThroughput
 * @property 'LOCAL'|'TIERED' $StorageMode
 * @property int $VolumeSizeGB
 */
class UpdateStorageRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput,
     *     StorageMode?: 'LOCAL'|'TIERED',
     *     VolumeSizeGB?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
