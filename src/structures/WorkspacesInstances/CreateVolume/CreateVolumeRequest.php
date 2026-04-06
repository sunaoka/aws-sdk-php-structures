<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property string|null $ClientToken
 * @property bool|null $Encrypted
 * @property int<0, max>|null $Iops
 * @property string|null $KmsKeyId
 * @property int<0, max>|null $SizeInGB
 * @property string|null $SnapshotId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property int<0, max>|null $Throughput
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 */
class CreateVolumeRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     ClientToken?: string|null,
     *     Encrypted?: bool|null,
     *     Iops?: int<0, max>|null,
     *     KmsKeyId?: string|null,
     *     SizeInGB?: int<0, max>|null,
     *     SnapshotId?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     Throughput?: int<0, max>|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
