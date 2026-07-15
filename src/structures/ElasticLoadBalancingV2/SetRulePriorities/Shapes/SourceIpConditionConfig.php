<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 * @property 'ipv4'|'ipv6'|null $IpAddressType
 */
class SourceIpConditionConfig extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
