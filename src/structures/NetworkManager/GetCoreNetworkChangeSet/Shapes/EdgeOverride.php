<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<string>>|null $EdgeSets
 * @property string|null $UseEdge
 */
class EdgeOverride extends Shape
{
    /**
     * @param array{
     *     EdgeSets?: list<list<string>>|null,
     *     UseEdge?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
