<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPrefixListResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'static-cidr'|'ipam-resource-cidr'|'ipam-pool-cidr' $RuleType
 * @property string|null $StaticCidr
 * @property string|null $IpamScopeId
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null $ResourceType
 * @property list<IpamPrefixListResolverRuleConditionRequest>|null $Conditions
 */
class IpamPrefixListResolverRuleRequest extends Shape
{
    /**
     * @param array{
     *     RuleType: 'static-cidr'|'ipam-resource-cidr'|'ipam-pool-cidr',
     *     StaticCidr?: string|null,
     *     IpamScopeId?: string|null,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null,
     *     Conditions?: list<IpamPrefixListResolverRuleConditionRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
