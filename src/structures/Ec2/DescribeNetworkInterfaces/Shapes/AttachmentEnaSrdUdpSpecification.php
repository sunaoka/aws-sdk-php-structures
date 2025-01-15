<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdUdpEnabled
 */
class AttachmentEnaSrdUdpSpecification extends Shape
{
    /**
     * @param array{EnaSrdUdpEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
