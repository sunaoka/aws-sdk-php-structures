<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\RemoveTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 */
class TagKeyOnly extends Shape
{
    /**
     * @param array{Key?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
