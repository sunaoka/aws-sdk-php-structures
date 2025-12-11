<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceVolumeId
 * @property int|null $Iops
 * @property int|null $Size
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $MultiAttachEnabled
 * @property int|null $Throughput
 * @property string|null $ClientToken
 */
class CopyVolumesRequest extends Request
{
    /**
     * @param array{
     *     SourceVolumeId: string,
     *     Iops?: int|null,
     *     Size?: int|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     MultiAttachEnabled?: bool|null,
     *     Throughput?: int|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
