<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $PolicyTypeName
 * @property list<PolicyAttributeDescription>|null $PolicyAttributeDescriptions
 */
class PolicyDescription extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     PolicyTypeName?: string|null,
     *     PolicyAttributeDescriptions?: list<PolicyAttributeDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
