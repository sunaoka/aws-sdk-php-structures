<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int|null $BytesConverted
 * @property string|null $Description
 * @property DiskImageDescription|null $Image
 * @property DiskImageVolumeDescription|null $Volume
 */
class ImportVolumeTaskDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     BytesConverted?: int|null,
     *     Description?: string|null,
     *     Image?: DiskImageDescription|null,
     *     Volume?: DiskImageVolumeDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
