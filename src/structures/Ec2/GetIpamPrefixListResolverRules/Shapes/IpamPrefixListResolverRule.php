<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'static-cidr'|'ipam-resource-cidr'|'ipam-pool-cidr'|null $RuleType
 * @property string|null $StaticCidr
 * @property string|null $IpamScopeId
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null $ResourceType
 * @property list<IpamPrefixListResolverRuleCondition>|null $Conditions
 */
class IpamPrefixListResolverRule extends Shape
{
    /**
     * @param array{
     *     RuleType?: 'static-cidr'|'ipam-resource-cidr'|'ipam-pool-cidr'|null,
     *     StaticCidr?: string|null,
     *     IpamScopeId?: string|null,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null,
     *     Conditions?: list<IpamPrefixListResolverRuleCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
