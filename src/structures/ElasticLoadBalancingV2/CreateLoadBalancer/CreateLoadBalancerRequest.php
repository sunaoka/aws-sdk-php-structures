<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $Subnets
 * @property list<Shapes\SubnetMapping> $SubnetMappings
 * @property list<string> $SecurityGroups
 * @property 'internet-facing'|'internal' $Scheme
 * @property list<Shapes\Tag> $Tags
 * @property 'application'|'network'|'gateway' $Type
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4' $IpAddressType
 * @property string $CustomerOwnedIpv4Pool
 * @property 'on'|'off' $EnablePrefixForIpv6SourceNat
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Subnets?: list<string>,
     *     SubnetMappings?: list<Shapes\SubnetMapping>,
     *     SecurityGroups?: list<string>,
     *     Scheme?: 'internet-facing'|'internal',
     *     Tags?: list<Shapes\Tag>,
     *     Type?: 'application'|'network'|'gateway',
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4',
     *     CustomerOwnedIpv4Pool?: string,
     *     EnablePrefixForIpv6SourceNat?: 'on'|'off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
