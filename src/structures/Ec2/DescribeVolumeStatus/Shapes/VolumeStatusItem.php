<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeStatusAction>|null $Actions
 * @property string|null $AvailabilityZone
 * @property string|null $OutpostArn
 * @property list<VolumeStatusEvent>|null $Events
 * @property string|null $VolumeId
 * @property VolumeStatusInfo|null $VolumeStatus
 * @property list<VolumeStatusAttachmentStatus>|null $AttachmentStatuses
 */
class VolumeStatusItem extends Shape
{
    /**
     * @param array{
     *     Actions?: list<VolumeStatusAction>|null,
     *     AvailabilityZone?: string|null,
     *     OutpostArn?: string|null,
     *     Events?: list<VolumeStatusEvent>|null,
     *     VolumeId?: string|null,
     *     VolumeStatus?: VolumeStatusInfo|null,
     *     AttachmentStatuses?: list<VolumeStatusAttachmentStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
