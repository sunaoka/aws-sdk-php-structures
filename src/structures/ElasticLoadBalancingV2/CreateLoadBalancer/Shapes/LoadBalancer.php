<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerArn
 * @property string|null $DNSName
 * @property string|null $CanonicalHostedZoneId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $LoadBalancerName
 * @property 'internet-facing'|'internal'|null $Scheme
 * @property string|null $VpcId
 * @property LoadBalancerState|null $State
 * @property 'application'|'network'|'gateway'|null $Type
 * @property list<AvailabilityZone>|null $AvailabilityZones
 * @property list<string>|null $SecurityGroups
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $IpAddressType
 * @property string|null $CustomerOwnedIpv4Pool
 * @property string|null $EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic
 * @property 'on'|'off'|null $EnablePrefixForIpv6SourceNat
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     LoadBalancerArn?: string|null,
     *     DNSName?: string|null,
     *     CanonicalHostedZoneId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LoadBalancerName?: string|null,
     *     Scheme?: 'internet-facing'|'internal'|null,
     *     VpcId?: string|null,
     *     State?: LoadBalancerState|null,
     *     Type?: 'application'|'network'|'gateway'|null,
     *     AvailabilityZones?: list<AvailabilityZone>|null,
     *     SecurityGroups?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?: string|null,
     *     EnablePrefixForIpv6SourceNat?: 'on'|'off'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
