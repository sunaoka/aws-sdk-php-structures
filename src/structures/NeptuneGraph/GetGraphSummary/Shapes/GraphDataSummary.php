<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numNodes
 * @property int $numEdges
 * @property int $numNodeLabels
 * @property int $numEdgeLabels
 * @property list<string> $nodeLabels
 * @property list<string> $edgeLabels
 * @property int $numNodeProperties
 * @property int $numEdgeProperties
 * @property list<array<string, int>> $nodeProperties
 * @property list<array<string, int>> $edgeProperties
 * @property int $totalNodePropertyValues
 * @property int $totalEdgePropertyValues
 * @property list<NodeStructure> $nodeStructures
 * @property list<EdgeStructure> $edgeStructures
 */
class GraphDataSummary extends Shape
{
    /**
     * @param array{
     *     numNodes?: int,
     *     numEdges?: int,
     *     numNodeLabels?: int,
     *     numEdgeLabels?: int,
     *     nodeLabels?: list<string>,
     *     edgeLabels?: list<string>,
     *     numNodeProperties?: int,
     *     numEdgeProperties?: int,
     *     nodeProperties?: list<array<string, int>>,
     *     edgeProperties?: list<array<string, int>>,
     *     totalNodePropertyValues?: int,
     *     totalEdgePropertyValues?: int,
     *     nodeStructures?: list<NodeStructure>,
     *     edgeStructures?: list<EdgeStructure>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
