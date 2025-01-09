<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Device
 * @property bool $Force
 * @property string $InstanceId
 * @property string $VolumeId
 * @property bool $DryRun
 */
class DetachVolumeRequest extends Request
{
    /**
     * @param array{
     *     Device?: string,
     *     Force?: bool,
     *     InstanceId?: string,
     *     VolumeId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
