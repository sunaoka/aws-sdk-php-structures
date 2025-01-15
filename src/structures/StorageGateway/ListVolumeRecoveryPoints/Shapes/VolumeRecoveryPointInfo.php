<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeARN
 * @property int|null $VolumeSizeInBytes
 * @property int|null $VolumeUsageInBytes
 * @property string|null $VolumeRecoveryPointTime
 */
class VolumeRecoveryPointInfo extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string|null,
     *     VolumeSizeInBytes?: int|null,
     *     VolumeUsageInBytes?: int|null,
     *     VolumeRecoveryPointTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
