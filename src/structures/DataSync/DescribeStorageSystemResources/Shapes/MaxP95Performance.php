<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $IopsRead
 * @property double $IopsWrite
 * @property double $IopsOther
 * @property double $IopsTotal
 * @property double $ThroughputRead
 * @property double $ThroughputWrite
 * @property double $ThroughputOther
 * @property double $ThroughputTotal
 * @property double $LatencyRead
 * @property double $LatencyWrite
 * @property double $LatencyOther
 */
class MaxP95Performance extends Shape
{
    /**
     * @param array{
     *     IopsRead?: double,
     *     IopsWrite?: double,
     *     IopsOther?: double,
     *     IopsTotal?: double,
     *     ThroughputRead?: double,
     *     ThroughputWrite?: double,
     *     ThroughputOther?: double,
     *     ThroughputTotal?: double,
     *     LatencyRead?: double,
     *     LatencyWrite?: double,
     *     LatencyOther?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
