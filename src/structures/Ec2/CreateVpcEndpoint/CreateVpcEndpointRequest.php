<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork' $VpcEndpointType
 * @property string $VpcId
 * @property string $ServiceName
 * @property string $PolicyDocument
 * @property list<string> $RouteTableIds
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property 'ipv4'|'dualstack'|'ipv6' $IpAddressType
 * @property Shapes\DnsOptionsSpecification $DnsOptions
 * @property string $ClientToken
 * @property bool $PrivateDnsEnabled
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property list<Shapes\SubnetConfiguration> $SubnetConfigurations
 * @property string $ServiceNetworkArn
 * @property string $ResourceConfigurationArn
 * @property string $ServiceRegion
 */
class CreateVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcEndpointType?: 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork',
     *     VpcId: string,
     *     ServiceName?: string,
     *     PolicyDocument?: string,
     *     RouteTableIds?: list<string>,
     *     SubnetIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6',
     *     DnsOptions?: Shapes\DnsOptionsSpecification,
     *     ClientToken?: string,
     *     PrivateDnsEnabled?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     SubnetConfigurations?: list<Shapes\SubnetConfiguration>,
     *     ServiceNetworkArn?: string,
     *     ResourceConfigurationArn?: string,
     *     ServiceRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
