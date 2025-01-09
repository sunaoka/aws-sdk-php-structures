<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeStatusAction> $Actions
 * @property string $AvailabilityZone
 * @property string $OutpostArn
 * @property list<VolumeStatusEvent> $Events
 * @property string $VolumeId
 * @property VolumeStatusInfo $VolumeStatus
 * @property list<VolumeStatusAttachmentStatus> $AttachmentStatuses
 */
class VolumeStatusItem extends Shape
{
    /**
     * @param array{
     *     Actions?: list<VolumeStatusAction>,
     *     AvailabilityZone?: string,
     *     OutpostArn?: string,
     *     Events?: list<VolumeStatusEvent>,
     *     VolumeId?: string,
     *     VolumeStatus?: VolumeStatusInfo,
     *     AttachmentStatuses?: list<VolumeStatusAttachmentStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
