<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Read
 * @property double|null $Write
 * @property double|null $Other
 */
class Latency extends Shape
{
    /**
     * @param array{
     *     Read?: double|null,
     *     Write?: double|null,
     *     Other?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
