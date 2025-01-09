<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuerySpatialCoverageMax $Max
 */
class QuerySpatialCoverage extends Shape
{
    /**
     * @param array{Max?: QuerySpatialCoverageMax} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
