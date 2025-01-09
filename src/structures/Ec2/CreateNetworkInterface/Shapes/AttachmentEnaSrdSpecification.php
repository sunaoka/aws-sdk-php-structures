<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnaSrdEnabled
 * @property AttachmentEnaSrdUdpSpecification $EnaSrdUdpSpecification
 */
class AttachmentEnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool,
     *     EnaSrdUdpSpecification?: AttachmentEnaSrdUdpSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
