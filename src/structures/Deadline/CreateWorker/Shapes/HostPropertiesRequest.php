<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IpAddresses $ipAddresses
 * @property string $hostName
 */
class HostPropertiesRequest extends Shape
{
    /**
     * @param array{
     *     ipAddresses?: IpAddresses,
     *     hostName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
