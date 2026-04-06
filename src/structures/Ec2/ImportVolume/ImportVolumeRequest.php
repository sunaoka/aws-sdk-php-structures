<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $AvailabilityZone
 * @property Shapes\DiskImageDetail $Image
 * @property string|null $Description
 * @property Shapes\VolumeDetail $Volume
 */
class ImportVolumeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     AvailabilityZone: string,
     *     Image: Shapes\DiskImageDetail,
     *     Description?: string|null,
     *     Volume: Shapes\VolumeDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
