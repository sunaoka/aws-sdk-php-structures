<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property Shapes\DiskImageDetail $Image
 * @property Shapes\VolumeDetail $Volume
 */
class ImportVolumeRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     Image: Shapes\DiskImageDetail,
     *     Volume: Shapes\VolumeDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
