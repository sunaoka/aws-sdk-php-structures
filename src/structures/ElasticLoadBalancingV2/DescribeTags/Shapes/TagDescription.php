<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<Tag> $Tags
 */
class TagDescription extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
