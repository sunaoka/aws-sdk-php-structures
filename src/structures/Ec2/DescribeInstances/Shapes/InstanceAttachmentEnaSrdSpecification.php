<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdEnabled
 * @property InstanceAttachmentEnaSrdUdpSpecification|null $EnaSrdUdpSpecification
 */
class InstanceAttachmentEnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool|null,
     *     EnaSrdUdpSpecification?: InstanceAttachmentEnaSrdUdpSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
