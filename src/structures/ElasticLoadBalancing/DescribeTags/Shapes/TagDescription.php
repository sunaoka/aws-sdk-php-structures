<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerName
 * @property list<Tag> $Tags
 */
class TagDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
