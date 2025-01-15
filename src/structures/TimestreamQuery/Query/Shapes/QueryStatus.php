<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ProgressPercentage
 * @property int|null $CumulativeBytesScanned
 * @property int|null $CumulativeBytesMetered
 */
class QueryStatus extends Shape
{
    /**
     * @param array{
     *     ProgressPercentage?: double|null,
     *     CumulativeBytesScanned?: int|null,
     *     CumulativeBytesMetered?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
