<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int|null $BytesConverted
 * @property string|null $Description
 * @property DiskImageDescription|null $Image
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property DiskImageVolumeDescription|null $Volume
 */
class ImportInstanceVolumeDetailItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     BytesConverted?: int|null,
     *     Description?: string|null,
     *     Image?: DiskImageDescription|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     Volume?: DiskImageVolumeDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
