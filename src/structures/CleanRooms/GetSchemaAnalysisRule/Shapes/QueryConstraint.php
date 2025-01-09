<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryConstraintRequireOverlap $requireOverlap
 */
class QueryConstraint extends Shape
{
    /**
     * @param array{requireOverlap?: QueryConstraintRequireOverlap} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
