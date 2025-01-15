<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property bool|null $AcceptanceRequired
 * @property string|null $PrivateDnsName
 * @property list<string>|null $NetworkLoadBalancerArns
 * @property list<string>|null $GatewayLoadBalancerArns
 * @property list<string>|null $SupportedIpAddressTypes
 * @property list<string>|null $SupportedRegions
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpcEndpointServiceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     AcceptanceRequired?: bool|null,
     *     PrivateDnsName?: string|null,
     *     NetworkLoadBalancerArns?: list<string>|null,
     *     GatewayLoadBalancerArns?: list<string>|null,
     *     SupportedIpAddressTypes?: list<string>|null,
     *     SupportedRegions?: list<string>|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
