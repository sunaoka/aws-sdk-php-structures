<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Value
 * @property string|null $TableArn
 */
class QueryTemporalRangeMax extends Shape
{
    /**
     * @param array{
     *     Value?: int|null,
     *     TableArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
