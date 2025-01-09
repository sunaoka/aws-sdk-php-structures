<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property string $TableArn
 */
class QueryTemporalRangeMax extends Shape
{
    /**
     * @param array{
     *     Value?: int,
     *     TableArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
