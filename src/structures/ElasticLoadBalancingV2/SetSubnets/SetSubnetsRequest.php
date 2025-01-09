<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<string> $Subnets
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4' $IpAddressType
 * @property 'on'|'off' $EnablePrefixForIpv6SourceNat
 */
class SetSubnetsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     Subnets?: list<string>,
     *     SubnetMappings?: list<Shapes\SubnetMapping>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4',
     *     EnablePrefixForIpv6SourceNat?: 'on'|'off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
