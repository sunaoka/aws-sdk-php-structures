<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $VpcEndpointId
 * @property bool $ResetPolicy
 * @property string $PolicyDocument
 * @property list<string> $AddRouteTableIds
 * @property list<string> $RemoveRouteTableIds
 * @property list<string> $AddSubnetIds
 * @property list<string> $RemoveSubnetIds
 * @property list<string> $AddSecurityGroupIds
 * @property list<string> $RemoveSecurityGroupIds
 * @property 'ipv4'|'dualstack'|'ipv6' $IpAddressType
 * @property Shapes\DnsOptionsSpecification $DnsOptions
 * @property bool $PrivateDnsEnabled
 * @property list<Shapes\SubnetConfiguration> $SubnetConfigurations
 */
class ModifyVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcEndpointId: string,
     *     ResetPolicy?: bool,
     *     PolicyDocument?: string,
     *     AddRouteTableIds?: list<string>,
     *     RemoveRouteTableIds?: list<string>,
     *     AddSubnetIds?: list<string>,
     *     RemoveSubnetIds?: list<string>,
     *     AddSecurityGroupIds?: list<string>,
     *     RemoveSecurityGroupIds?: list<string>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6',
     *     DnsOptions?: Shapes\DnsOptionsSpecification,
     *     PrivateDnsEnabled?: bool,
     *     SubnetConfigurations?: list<Shapes\SubnetConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
