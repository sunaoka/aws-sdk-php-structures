<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ModifyVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property int<1, 16384>|null $SizeInGB
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property int<0, max>|null $Iops
 * @property int<0, max>|null $Throughput
 * @property string|null $ClientToken
 */
class ModifyVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     SizeInGB?: int<1, 16384>|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     Iops?: int<0, max>|null,
     *     Throughput?: int<0, max>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
