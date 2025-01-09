<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<string>> $EdgeSets
 * @property string $UseEdge
 */
class EdgeOverride extends Shape
{
    /**
     * @param array{
     *     EdgeSets?: list<list<string>>,
     *     UseEdge?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
