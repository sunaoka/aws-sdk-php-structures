<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property string|null $AttachmentId
 * @property bool|null $DeleteOnTermination
 * @property int|null $DeviceIndex
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $Status
 * @property int|null $NetworkCardIndex
 * @property InstanceAttachmentEnaSrdSpecification|null $EnaSrdSpecification
 * @property int|null $EnaQueueCount
 */
class InstanceNetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult|null,
     *     AttachmentId?: string|null,
     *     DeleteOnTermination?: bool|null,
     *     DeviceIndex?: int|null,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached'|null,
     *     NetworkCardIndex?: int|null,
     *     EnaSrdSpecification?: InstanceAttachmentEnaSrdSpecification|null,
     *     EnaQueueCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
