<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property bool $Encrypted
 * @property int $Iops
 * @property string $KmsKeyId
 * @property string $OutpostArn
 * @property int $Size
 * @property string $SnapshotId
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $MultiAttachEnabled
 * @property int $Throughput
 * @property string $ClientToken
 * @property Shapes\OperatorRequest $Operator
 * @property bool $DryRun
 */
class CreateVolumeRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     Encrypted?: bool,
     *     Iops?: int,
     *     KmsKeyId?: string,
     *     OutpostArn?: string,
     *     Size?: int,
     *     SnapshotId?: string,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     MultiAttachEnabled?: bool,
     *     Throughput?: int,
     *     ClientToken?: string,
     *     Operator?: Shapes\OperatorRequest,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
