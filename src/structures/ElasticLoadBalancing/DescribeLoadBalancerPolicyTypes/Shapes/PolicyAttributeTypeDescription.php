<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeType
 * @property string $Description
 * @property string $DefaultValue
 * @property string $Cardinality
 */
class PolicyAttributeTypeDescription extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeType?: string,
     *     Description?: string,
     *     DefaultValue?: string,
     *     Cardinality?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
