<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Ipv6Addresses
 * @property list<PrivateIpAddressDetails> $PrivateIpAddresses
 * @property string $PublicIp
 * @property list<SecurityGroup> $SecurityGroups
 * @property string $SubNetId
 * @property string $VpcId
 */
class Ec2NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv6Addresses?: list<string>,
     *     PrivateIpAddresses?: list<PrivateIpAddressDetails>,
     *     PublicIp?: string,
     *     SecurityGroups?: list<SecurityGroup>,
     *     SubNetId?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
