<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $AvailabilityZone
 * @property Shapes\DiskImageDetail $Image
 * @property string $Description
 * @property Shapes\VolumeDetail $Volume
 */
class ImportVolumeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AvailabilityZone: string,
     *     Image: Shapes\DiskImageDetail,
     *     Description?: string,
     *     Volume: Shapes\VolumeDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
