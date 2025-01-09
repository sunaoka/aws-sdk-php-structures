<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryTemporalRangeMax $Max
 */
class QueryTemporalRange extends Shape
{
    /**
     * @param array{Max?: QueryTemporalRangeMax} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
