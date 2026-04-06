<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $joinColumns
 * @property list<QueryConstraint> $queryConstraints
 * @property list<string>|null $dimensionColumns
 */
class AnalysisRuleIdMappingTable extends Shape
{
    /**
     * @param array{
     *     joinColumns: list<string>,
     *     queryConstraints: list<QueryConstraint>,
     *     dimensionColumns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
