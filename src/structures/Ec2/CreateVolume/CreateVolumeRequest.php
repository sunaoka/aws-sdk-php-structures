<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property bool|null $Encrypted
 * @property int|null $Iops
 * @property string|null $KmsKeyId
 * @property string|null $OutpostArn
 * @property int|null $Size
 * @property string|null $SnapshotId
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $MultiAttachEnabled
 * @property int|null $Throughput
 * @property string|null $ClientToken
 * @property Shapes\OperatorRequest|null $Operator
 * @property bool|null $DryRun
 */
class CreateVolumeRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Encrypted?: bool|null,
     *     Iops?: int|null,
     *     KmsKeyId?: string|null,
     *     OutpostArn?: string|null,
     *     Size?: int|null,
     *     SnapshotId?: string|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     MultiAttachEnabled?: bool|null,
     *     Throughput?: int|null,
     *     ClientToken?: string|null,
     *     Operator?: Shapes\OperatorRequest|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
