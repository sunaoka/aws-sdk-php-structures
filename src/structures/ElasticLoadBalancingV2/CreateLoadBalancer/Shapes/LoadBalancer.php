<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerArn
 * @property string $DNSName
 * @property string $CanonicalHostedZoneId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $LoadBalancerName
 * @property 'internet-facing'|'internal' $Scheme
 * @property string $VpcId
 * @property LoadBalancerState $State
 * @property 'application'|'network'|'gateway' $Type
 * @property list<AvailabilityZone> $AvailabilityZones
 * @property list<string> $SecurityGroups
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4' $IpAddressType
 * @property string $CustomerOwnedIpv4Pool
 * @property string $EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic
 * @property 'on'|'off' $EnablePrefixForIpv6SourceNat
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     LoadBalancerArn?: string,
     *     DNSName?: string,
     *     CanonicalHostedZoneId?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LoadBalancerName?: string,
     *     Scheme?: 'internet-facing'|'internal',
     *     VpcId?: string,
     *     State?: LoadBalancerState,
     *     Type?: 'application'|'network'|'gateway',
     *     AvailabilityZones?: list<AvailabilityZone>,
     *     SecurityGroups?: list<string>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4',
     *     CustomerOwnedIpv4Pool?: string,
     *     EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?: string,
     *     EnablePrefixForIpv6SourceNat?: 'on'|'off'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
