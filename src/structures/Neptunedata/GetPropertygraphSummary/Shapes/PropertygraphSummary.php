<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numNodes
 * @property int|null $numEdges
 * @property int|null $numNodeLabels
 * @property int|null $numEdgeLabels
 * @property list<string>|null $nodeLabels
 * @property list<string>|null $edgeLabels
 * @property int|null $numNodeProperties
 * @property int|null $numEdgeProperties
 * @property list<array<string, int>>|null $nodeProperties
 * @property list<array<string, int>>|null $edgeProperties
 * @property int|null $totalNodePropertyValues
 * @property int|null $totalEdgePropertyValues
 * @property list<NodeStructure>|null $nodeStructures
 * @property list<EdgeStructure>|null $edgeStructures
 */
class PropertygraphSummary extends Shape
{
    /**
     * @param array{
     *     numNodes?: int|null,
     *     numEdges?: int|null,
     *     numNodeLabels?: int|null,
     *     numEdgeLabels?: int|null,
     *     nodeLabels?: list<string>|null,
     *     edgeLabels?: list<string>|null,
     *     numNodeProperties?: int|null,
     *     numEdgeProperties?: int|null,
     *     nodeProperties?: list<array<string, int>>|null,
     *     edgeProperties?: list<array<string, int>>|null,
     *     totalNodePropertyValues?: int|null,
     *     totalEdgePropertyValues?: int|null,
     *     nodeStructures?: list<NodeStructure>|null,
     *     edgeStructures?: list<EdgeStructure>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
