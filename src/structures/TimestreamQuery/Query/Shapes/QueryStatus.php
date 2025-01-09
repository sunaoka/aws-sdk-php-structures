<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ProgressPercentage
 * @property int $CumulativeBytesScanned
 * @property int $CumulativeBytesMetered
 */
class QueryStatus extends Shape
{
    /**
     * @param array{
     *     ProgressPercentage?: double,
     *     CumulativeBytesScanned?: int,
     *     CumulativeBytesMetered?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
