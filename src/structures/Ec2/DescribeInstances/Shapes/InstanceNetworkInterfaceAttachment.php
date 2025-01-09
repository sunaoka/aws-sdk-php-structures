<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AttachTime
 * @property string $AttachmentId
 * @property bool $DeleteOnTermination
 * @property int $DeviceIndex
 * @property 'attaching'|'attached'|'detaching'|'detached' $Status
 * @property int $NetworkCardIndex
 * @property InstanceAttachmentEnaSrdSpecification $EnaSrdSpecification
 */
class InstanceNetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult,
     *     AttachmentId?: string,
     *     DeleteOnTermination?: bool,
     *     DeviceIndex?: int,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached',
     *     NetworkCardIndex?: int,
     *     EnaSrdSpecification?: InstanceAttachmentEnaSrdSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
