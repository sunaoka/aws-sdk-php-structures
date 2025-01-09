<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property int $BytesConverted
 * @property string $Description
 * @property DiskImageDescription $Image
 * @property DiskImageVolumeDescription $Volume
 */
class ImportVolumeTaskDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     BytesConverted?: int,
     *     Description?: string,
     *     Image?: DiskImageDescription,
     *     Volume?: DiskImageVolumeDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
