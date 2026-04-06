<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IpAddresses|null $ipAddresses
 * @property string|null $hostName
 */
class HostPropertiesRequest extends Shape
{
    /**
     * @param array{
     *     ipAddresses?: IpAddresses|null,
     *     hostName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
