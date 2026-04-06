<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Hostname
 * @property string|null $Ec2InstanceId
 * @property list<IpAddressMember>|null $IpAddresses
 * @property string|null $OsVersion
 */
class AssociatedHost extends Shape
{
    /**
     * @param array{
     *     Hostname?: string|null,
     *     Ec2InstanceId?: string|null,
     *     IpAddresses?: list<IpAddressMember>|null,
     *     OsVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
