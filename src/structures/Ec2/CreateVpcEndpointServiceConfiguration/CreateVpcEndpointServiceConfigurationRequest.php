<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property bool $AcceptanceRequired
 * @property string $PrivateDnsName
 * @property list<string> $NetworkLoadBalancerArns
 * @property list<string> $GatewayLoadBalancerArns
 * @property list<string> $SupportedIpAddressTypes
 * @property list<string> $SupportedRegions
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateVpcEndpointServiceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AcceptanceRequired?: bool,
     *     PrivateDnsName?: string,
     *     NetworkLoadBalancerArns?: list<string>,
     *     GatewayLoadBalancerArns?: list<string>,
     *     SupportedIpAddressTypes?: list<string>,
     *     SupportedRegions?: list<string>,
     *     ClientToken?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
