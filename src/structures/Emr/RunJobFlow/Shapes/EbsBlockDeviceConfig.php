<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeSpecification $VolumeSpecification
 * @property int|null $VolumesPerInstance
 */
class EbsBlockDeviceConfig extends Shape
{
    /**
     * @param array{
     *     VolumeSpecification: VolumeSpecification,
     *     VolumesPerInstance?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
