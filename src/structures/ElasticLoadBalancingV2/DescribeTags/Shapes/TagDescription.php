<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property list<Tag>|null $Tags
 */
class TagDescription extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
