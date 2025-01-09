<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Read
 * @property double $Write
 * @property double $Other
 * @property double $Total
 */
class Throughput extends Shape
{
    /**
     * @param array{
     *     Read?: double,
     *     Write?: double,
     *     Other?: double,
     *     Total?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
