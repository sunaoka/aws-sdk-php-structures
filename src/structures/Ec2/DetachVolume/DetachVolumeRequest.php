<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Device
 * @property bool|null $Force
 * @property string|null $InstanceId
 * @property string $VolumeId
 * @property bool|null $DryRun
 */
class DetachVolumeRequest extends Request
{
    /**
     * @param array{
     *     Device?: string|null,
     *     Force?: bool|null,
     *     InstanceId?: string|null,
     *     VolumeId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
