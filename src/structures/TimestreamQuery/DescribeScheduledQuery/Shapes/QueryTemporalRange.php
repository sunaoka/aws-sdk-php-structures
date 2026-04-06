<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryTemporalRangeMax|null $Max
 */
class QueryTemporalRange extends Shape
{
    /**
     * @param array{Max?: QueryTemporalRangeMax|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
