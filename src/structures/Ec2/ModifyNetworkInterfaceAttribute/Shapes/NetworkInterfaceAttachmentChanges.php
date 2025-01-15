<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentId
 * @property bool|null $DeleteOnTermination
 */
class NetworkInterfaceAttachmentChanges extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string|null,
     *     DeleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
