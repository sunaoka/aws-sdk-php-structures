<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VolumeId
 * @property int|null $Size
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property int|null $Iops
 * @property int|null $Throughput
 * @property bool|null $MultiAttachEnabled
 */
class ModifyVolumeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VolumeId: string,
     *     Size?: int|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     Iops?: int|null,
     *     Throughput?: int|null,
     *     MultiAttachEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
