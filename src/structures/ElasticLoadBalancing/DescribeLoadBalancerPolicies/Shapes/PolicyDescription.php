<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyTypeName
 * @property list<PolicyAttributeDescription> $PolicyAttributeDescriptions
 */
class PolicyDescription extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyTypeName?: string,
     *     PolicyAttributeDescriptions?: list<PolicyAttributeDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
