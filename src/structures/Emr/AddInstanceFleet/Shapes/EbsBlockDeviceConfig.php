<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeSpecification $VolumeSpecification
 * @property int $VolumesPerInstance
 */
class EbsBlockDeviceConfig extends Shape
{
    /**
     * @param array{
     *     VolumeSpecification: VolumeSpecification,
     *     VolumesPerInstance?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
