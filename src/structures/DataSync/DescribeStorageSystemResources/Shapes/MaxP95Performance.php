<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $IopsRead
 * @property double|null $IopsWrite
 * @property double|null $IopsOther
 * @property double|null $IopsTotal
 * @property double|null $ThroughputRead
 * @property double|null $ThroughputWrite
 * @property double|null $ThroughputOther
 * @property double|null $ThroughputTotal
 * @property double|null $LatencyRead
 * @property double|null $LatencyWrite
 * @property double|null $LatencyOther
 */
class MaxP95Performance extends Shape
{
    /**
     * @param array{
     *     IopsRead?: double|null,
     *     IopsWrite?: double|null,
     *     IopsOther?: double|null,
     *     IopsTotal?: double|null,
     *     ThroughputRead?: double|null,
     *     ThroughputWrite?: double|null,
     *     ThroughputOther?: double|null,
     *     ThroughputTotal?: double|null,
     *     LatencyRead?: double|null,
     *     LatencyWrite?: double|null,
     *     LatencyOther?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
