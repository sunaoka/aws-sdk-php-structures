<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property int $BytesConverted
 * @property string $Description
 * @property DiskImageDescription $Image
 * @property string $Status
 * @property string $StatusMessage
 * @property DiskImageVolumeDescription $Volume
 */
class ImportInstanceVolumeDetailItem extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     BytesConverted?: int,
     *     Description?: string,
     *     Image?: DiskImageDescription,
     *     Status?: string,
     *     StatusMessage?: string,
     *     Volume?: DiskImageVolumeDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
