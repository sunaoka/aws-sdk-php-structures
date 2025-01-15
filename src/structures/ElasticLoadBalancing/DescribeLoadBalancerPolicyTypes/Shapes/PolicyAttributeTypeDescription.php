<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicyTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $AttributeType
 * @property string|null $Description
 * @property string|null $DefaultValue
 * @property string|null $Cardinality
 */
class PolicyAttributeTypeDescription extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeType?: string|null,
     *     Description?: string|null,
     *     DefaultValue?: string|null,
     *     Cardinality?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
