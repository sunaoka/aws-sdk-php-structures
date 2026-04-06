<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property list<string>|null $nodeProperties
 * @property list<string>|null $distinctOutgoingEdgeLabels
 */
class NodeStructure extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     nodeProperties?: list<string>|null,
     *     distinctOutgoingEdgeLabels?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
