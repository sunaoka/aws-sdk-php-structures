<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdEnabled
 * @property AttachmentEnaSrdUdpSpecification|null $EnaSrdUdpSpecification
 */
class AttachmentEnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool|null,
     *     EnaSrdUdpSpecification?: AttachmentEnaSrdUdpSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
