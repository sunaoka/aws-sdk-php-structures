<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachmentId
 * @property bool $DeleteOnTermination
 */
class NetworkInterfaceAttachmentChanges extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string,
     *     DeleteOnTermination?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
