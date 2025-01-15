<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string>|null $Subnets
 * @property list<Shapes\SubnetMapping>|null $SubnetMappings
 * @property list<string>|null $SecurityGroups
 * @property 'internet-facing'|'internal'|null $Scheme
 * @property list<Shapes\Tag>|null $Tags
 * @property 'application'|'network'|'gateway'|null $Type
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $IpAddressType
 * @property string|null $CustomerOwnedIpv4Pool
 * @property 'on'|'off'|null $EnablePrefixForIpv6SourceNat
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Subnets?: list<string>|null,
     *     SubnetMappings?: list<Shapes\SubnetMapping>|null,
     *     SecurityGroups?: list<string>|null,
     *     Scheme?: 'internet-facing'|'internal'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Type?: 'application'|'network'|'gateway'|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     EnablePrefixForIpv6SourceNat?: 'on'|'off'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
