<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AttachTime
 * @property string $AttachmentId
 * @property bool $DeleteOnTermination
 * @property int $DeviceIndex
 * @property int $NetworkCardIndex
 * @property string $InstanceId
 * @property string $InstanceOwnerId
 * @property 'attaching'|'attached'|'detaching'|'detached' $Status
 * @property AttachmentEnaSrdSpecification $EnaSrdSpecification
 */
class NetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult,
     *     AttachmentId?: string,
     *     DeleteOnTermination?: bool,
     *     DeviceIndex?: int,
     *     NetworkCardIndex?: int,
     *     InstanceId?: string,
     *     InstanceOwnerId?: string,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached',
     *     EnaSrdSpecification?: AttachmentEnaSrdSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
