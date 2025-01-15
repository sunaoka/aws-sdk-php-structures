<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $columns
 */
class QueryConstraintRequireOverlap extends Shape
{
    /**
     * @param array{columns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
