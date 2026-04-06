<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'Interface'|'Gateway'|'GatewayLoadBalancer'|null $VpcEndpointType
 * @property string $VpcId
 * @property string $ServiceName
 * @property string|null $PolicyDocument
 * @property list<string>|null $RouteTableIds
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property Shapes\DnsOptionsSpecification|null $DnsOptions
 * @property string|null $ClientToken
 * @property bool|null $PrivateDnsEnabled
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcEndpointType?: 'Interface'|'Gateway'|'GatewayLoadBalancer'|null,
     *     VpcId: string,
     *     ServiceName: string,
     *     PolicyDocument?: string|null,
     *     RouteTableIds?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     DnsOptions?: Shapes\DnsOptionsSpecification|null,
     *     ClientToken?: string|null,
     *     PrivateDnsEnabled?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
