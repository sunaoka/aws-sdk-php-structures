<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Ipv6Addresses
 * @property list<PrivateIpAddressDetails>|null $PrivateIpAddresses
 * @property string|null $PublicIp
 * @property list<SecurityGroup>|null $SecurityGroups
 * @property string|null $SubNetId
 * @property string|null $VpcId
 */
class Ec2NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv6Addresses?: list<string>|null,
     *     PrivateIpAddresses?: list<PrivateIpAddressDetails>|null,
     *     PublicIp?: string|null,
     *     SecurityGroups?: list<SecurityGroup>|null,
     *     SubNetId?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
