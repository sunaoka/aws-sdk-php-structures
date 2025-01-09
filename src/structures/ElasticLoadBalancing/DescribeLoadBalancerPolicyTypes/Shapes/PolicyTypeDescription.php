<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyTypeName
 * @property string $Description
 * @property list<PolicyAttributeTypeDescription> $PolicyAttributeTypeDescriptions
 */
class PolicyTypeDescription extends Shape
{
    /**
     * @param array{
     *     PolicyTypeName?: string,
     *     Description?: string,
     *     PolicyAttributeTypeDescriptions?: list<PolicyAttributeTypeDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
