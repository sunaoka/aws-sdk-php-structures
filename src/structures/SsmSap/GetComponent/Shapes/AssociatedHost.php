<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property string $Ec2InstanceId
 * @property list<IpAddressMember> $IpAddresses
 * @property string $OsVersion
 */
class AssociatedHost extends Shape
{
    /**
     * @param array{
     *     Hostname?: string,
     *     Ec2InstanceId?: string,
     *     IpAddresses?: list<IpAddressMember>,
     *     OsVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
