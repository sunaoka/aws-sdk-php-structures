<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuerySpatialCoverageMax|null $Max
 */
class QuerySpatialCoverage extends Shape
{
    /**
     * @param array{Max?: QuerySpatialCoverageMax|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
