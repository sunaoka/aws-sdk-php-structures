<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DefaultEnaQueueCount
 * @property int|null $EnaQueueCount
 * @property string|null $AttachmentId
 * @property bool|null $DeleteOnTermination
 */
class NetworkInterfaceAttachmentChanges extends Shape
{
    /**
     * @param array{
     *     DefaultEnaQueueCount?: bool|null,
     *     EnaQueueCount?: int|null,
     *     AttachmentId?: string|null,
     *     DeleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
