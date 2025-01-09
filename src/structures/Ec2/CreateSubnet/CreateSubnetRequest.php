<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property string $CidrBlock
 * @property string $Ipv6CidrBlock
 * @property string $OutpostArn
 * @property string $VpcId
 * @property bool $Ipv6Native
 * @property string $Ipv4IpamPoolId
 * @property int $Ipv4NetmaskLength
 * @property string $Ipv6IpamPoolId
 * @property int $Ipv6NetmaskLength
 * @property bool $DryRun
 */
class CreateSubnetRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     CidrBlock?: string,
     *     Ipv6CidrBlock?: string,
     *     OutpostArn?: string,
     *     VpcId: string,
     *     Ipv6Native?: bool,
     *     Ipv4IpamPoolId?: string,
     *     Ipv4NetmaskLength?: int,
     *     Ipv6IpamPoolId?: string,
     *     Ipv6NetmaskLength?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
