<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyTypeName
 * @property string|null $Description
 * @property list<PolicyAttributeTypeDescription>|null $PolicyAttributeTypeDescriptions
 */
class PolicyTypeDescription extends Shape
{
    /**
     * @param array{
     *     PolicyTypeName?: string|null,
     *     Description?: string|null,
     *     PolicyAttributeTypeDescriptions?: list<PolicyAttributeTypeDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
