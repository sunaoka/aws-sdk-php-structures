<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IpAddresses|null $ipAddresses
 * @property string|null $hostName
 * @property string|null $ec2InstanceArn
 * @property string|null $ec2InstanceType
 */
class HostPropertiesResponse extends Shape
{
    /**
     * @param array{
     *     ipAddresses?: IpAddresses|null,
     *     hostName?: string|null,
     *     ec2InstanceArn?: string|null,
     *     ec2InstanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
