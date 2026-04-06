<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceArn
 * @property string|null $ec2InstanceType
 * @property string|null $hostName
 * @property IpAddresses|null $ipAddresses
 */
class HostPropertiesResponse extends Shape
{
    /**
     * @param array{
     *     ec2InstanceArn?: string|null,
     *     ec2InstanceType?: string|null,
     *     hostName?: string|null,
     *     ipAddresses?: IpAddresses|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
