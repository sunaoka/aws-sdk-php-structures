<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property list<string> $nodeProperties
 * @property list<string> $distinctOutgoingEdgeLabels
 */
class NodeStructure extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     nodeProperties?: list<string>,
     *     distinctOutgoingEdgeLabels?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
