<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $VolumeId
 * @property int $Size
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property int $Iops
 * @property int $Throughput
 * @property bool $MultiAttachEnabled
 */
class ModifyVolumeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VolumeId: string,
     *     Size?: int,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     Iops?: int,
     *     Throughput?: int,
     *     MultiAttachEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
