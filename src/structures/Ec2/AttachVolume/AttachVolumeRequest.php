<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Device
 * @property string $InstanceId
 * @property string $VolumeId
 * @property int|null $EbsCardIndex
 * @property bool|null $DryRun
 */
class AttachVolumeRequest extends Request
{
    /**
     * @param array{
     *     Device: string,
     *     InstanceId: string,
     *     VolumeId: string,
     *     EbsCardIndex?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
