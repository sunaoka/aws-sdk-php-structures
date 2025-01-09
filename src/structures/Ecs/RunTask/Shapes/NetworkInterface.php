<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attachmentId
 * @property string $privateIpv4Address
 * @property string $ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string,
     *     privateIpv4Address?: string,
     *     ipv6Address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
