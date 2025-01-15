<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property string|null $AttachmentId
 * @property bool|null $DeleteOnTermination
 * @property int|null $DeviceIndex
 * @property int|null $NetworkCardIndex
 * @property string|null $InstanceId
 * @property string|null $InstanceOwnerId
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $Status
 * @property AttachmentEnaSrdSpecification|null $EnaSrdSpecification
 */
class NetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult|null,
     *     AttachmentId?: string|null,
     *     DeleteOnTermination?: bool|null,
     *     DeviceIndex?: int|null,
     *     NetworkCardIndex?: int|null,
     *     InstanceId?: string|null,
     *     InstanceOwnerId?: string|null,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached'|null,
     *     EnaSrdSpecification?: AttachmentEnaSrdSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
