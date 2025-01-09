<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeARN
 * @property int $VolumeSizeInBytes
 * @property int $VolumeUsageInBytes
 * @property string $VolumeRecoveryPointTime
 */
class VolumeRecoveryPointInfo extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string,
     *     VolumeSizeInBytes?: int,
     *     VolumeUsageInBytes?: int,
     *     VolumeRecoveryPointTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
