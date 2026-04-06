<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'equals'|'not-equals'|'subnet-of'|null $Operation
 * @property string|null $IpamPoolId
 * @property string|null $ResourceId
 * @property string|null $ResourceOwner
 * @property string|null $ResourceRegion
 * @property IpamResourceTag|null $ResourceTag
 * @property string|null $Cidr
 */
class IpamPrefixListResolverRuleCondition extends Shape
{
    /**
     * @param array{
     *     Operation?: 'equals'|'not-equals'|'subnet-of'|null,
     *     IpamPoolId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceOwner?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceTag?: IpamResourceTag|null,
     *     Cidr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
