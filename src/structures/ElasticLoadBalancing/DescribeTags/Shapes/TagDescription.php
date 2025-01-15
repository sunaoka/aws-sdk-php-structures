<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerName
 * @property list<Tag>|null $Tags
 */
class TagDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
