<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CidrBlock
 * @property string|null $Ipv6Pool
 * @property string|null $Ipv6CidrBlock
 * @property string|null $Ipv4IpamPoolId
 * @property int|null $Ipv4NetmaskLength
 * @property string|null $Ipv6IpamPoolId
 * @property int|null $Ipv6NetmaskLength
 * @property string|null $Ipv6CidrBlockNetworkBorderGroup
 * @property Shapes\VpcEncryptionControlConfiguration|null $VpcEncryptionControl
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property 'default'|'dedicated'|'host'|null $InstanceTenancy
 * @property bool|null $AmazonProvidedIpv6CidrBlock
 */
class CreateVpcRequest extends Request
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     Ipv6Pool?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv4IpamPoolId?: string|null,
     *     Ipv4NetmaskLength?: int|null,
     *     Ipv6IpamPoolId?: string|null,
     *     Ipv6NetmaskLength?: int|null,
     *     Ipv6CidrBlockNetworkBorderGroup?: string|null,
     *     VpcEncryptionControl?: Shapes\VpcEncryptionControlConfiguration|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     InstanceTenancy?: 'default'|'dedicated'|'host'|null,
     *     AmazonProvidedIpv6CidrBlock?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
