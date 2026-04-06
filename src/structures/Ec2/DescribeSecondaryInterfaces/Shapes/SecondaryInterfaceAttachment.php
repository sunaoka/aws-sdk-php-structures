<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondaryInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentId
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property bool|null $DeleteOnTermination
 * @property int|null $DeviceIndex
 * @property string|null $InstanceId
 * @property string|null $InstanceOwnerId
 * @property int|null $NetworkCardIndex
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $Status
 */
class SecondaryInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string|null,
     *     AttachTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteOnTermination?: bool|null,
     *     DeviceIndex?: int|null,
     *     InstanceId?: string|null,
     *     InstanceOwnerId?: string|null,
     *     NetworkCardIndex?: int|null,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
