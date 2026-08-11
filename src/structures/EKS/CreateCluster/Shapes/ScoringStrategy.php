<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LeastAllocated'|'MostAllocated'|null $type
 * @property list<ResourceWeight>|null $resources
 */
class ScoringStrategy extends Shape
{
    /**
     * @param array{
     *     type?: 'LeastAllocated'|'MostAllocated'|null,
     *     resources?: list<ResourceWeight>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
