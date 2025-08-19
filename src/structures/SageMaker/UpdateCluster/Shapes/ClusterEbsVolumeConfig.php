<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 16384>|null $VolumeSizeInGB
 * @property string|null $VolumeKmsKeyId
 * @property bool|null $RootVolume
 */
class ClusterEbsVolumeConfig extends Shape
{
    /**
     * @param array{
     *     VolumeSizeInGB?: int<1, 16384>|null,
     *     VolumeKmsKeyId?: string|null,
     *     RootVolume?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
