<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachmentId
 * @property string|null $privateIpv4Address
 * @property string|null $ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string|null,
     *     privateIpv4Address?: string|null,
     *     ipv6Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
