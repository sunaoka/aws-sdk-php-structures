<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IpAddresses $ipAddresses
 * @property string $hostName
 * @property string $ec2InstanceArn
 * @property string $ec2InstanceType
 */
class HostPropertiesResponse extends Shape
{
    /**
     * @param array{
     *     ipAddresses?: IpAddresses,
     *     hostName?: string,
     *     ec2InstanceArn?: string,
     *     ec2InstanceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
