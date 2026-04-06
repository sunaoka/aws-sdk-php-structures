<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostName
 * @property IpAddresses|null $ipAddresses
 */
class HostPropertiesRequest extends Shape
{
    /**
     * @param array{
     *     hostName?: string|null,
     *     ipAddresses?: IpAddresses|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
