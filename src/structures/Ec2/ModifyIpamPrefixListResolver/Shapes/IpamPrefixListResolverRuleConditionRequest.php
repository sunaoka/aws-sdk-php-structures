<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'equals'|'not-equals'|'subnet-of' $Operation
 * @property string|null $IpamPoolId
 * @property string|null $ResourceId
 * @property string|null $ResourceOwner
 * @property string|null $ResourceRegion
 * @property RequestIpamResourceTag|null $ResourceTag
 * @property string|null $Cidr
 */
class IpamPrefixListResolverRuleConditionRequest extends Shape
{
    /**
     * @param array{
     *     Operation: 'equals'|'not-equals'|'subnet-of',
     *     IpamPoolId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceOwner?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceTag?: RequestIpamResourceTag|null,
     *     Cidr?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
