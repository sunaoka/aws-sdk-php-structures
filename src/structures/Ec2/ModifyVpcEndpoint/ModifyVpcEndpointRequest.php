<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcEndpointId
 * @property bool|null $ResetPolicy
 * @property string|null $PolicyDocument
 * @property list<string>|null $AddRouteTableIds
 * @property list<string>|null $RemoveRouteTableIds
 * @property list<string>|null $AddSubnetIds
 * @property list<string>|null $RemoveSubnetIds
 * @property list<string>|null $AddSecurityGroupIds
 * @property list<string>|null $RemoveSecurityGroupIds
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property Shapes\DnsOptionsSpecification|null $DnsOptions
 * @property bool|null $PrivateDnsEnabled
 * @property list<Shapes\SubnetConfiguration>|null $SubnetConfigurations
 */
class ModifyVpcEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcEndpointId: string,
     *     ResetPolicy?: bool|null,
     *     PolicyDocument?: string|null,
     *     AddRouteTableIds?: list<string>|null,
     *     RemoveRouteTableIds?: list<string>|null,
     *     AddSubnetIds?: list<string>|null,
     *     RemoveSubnetIds?: list<string>|null,
     *     AddSecurityGroupIds?: list<string>|null,
     *     RemoveSecurityGroupIds?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     DnsOptions?: Shapes\DnsOptionsSpecification|null,
     *     PrivateDnsEnabled?: bool|null,
     *     SubnetConfigurations?: list<Shapes\SubnetConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
