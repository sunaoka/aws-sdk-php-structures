<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $tags
 */
class EntityAggregateFilter extends Shape
{
    /**
     * @param array{tags?: array<string, list<string>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
