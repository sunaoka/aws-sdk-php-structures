<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINEAGE' $relationType
 * @property 'IN'|'OUT' $relationDirection
 * @property int<1, 5>|null $maxPathLength
 */
class RelationPattern extends Shape
{
    /**
     * @param array{
     *     relationType: 'LINEAGE',
     *     relationDirection: 'IN'|'OUT',
     *     maxPathLength?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
