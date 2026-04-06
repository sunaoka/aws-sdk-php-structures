<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property string|null $CidrBlock
 * @property string|null $Ipv6CidrBlock
 * @property string|null $OutpostArn
 * @property string $VpcId
 * @property bool|null $Ipv6Native
 * @property string|null $Ipv4IpamPoolId
 * @property int|null $Ipv4NetmaskLength
 * @property string|null $Ipv6IpamPoolId
 * @property int|null $Ipv6NetmaskLength
 * @property bool|null $DryRun
 */
class CreateSubnetRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CidrBlock?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     OutpostArn?: string|null,
     *     VpcId: string,
     *     Ipv6Native?: bool|null,
     *     Ipv4IpamPoolId?: string|null,
     *     Ipv4NetmaskLength?: int|null,
     *     Ipv6IpamPoolId?: string|null,
     *     Ipv6NetmaskLength?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
