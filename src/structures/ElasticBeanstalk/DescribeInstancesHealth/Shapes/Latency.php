<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $P999
 * @property double|null $P99
 * @property double|null $P95
 * @property double|null $P90
 * @property double|null $P85
 * @property double|null $P75
 * @property double|null $P50
 * @property double|null $P10
 */
class Latency extends Shape
{
    /**
     * @param array{
     *     P999?: double|null,
     *     P99?: double|null,
     *     P95?: double|null,
     *     P90?: double|null,
     *     P85?: double|null,
     *     P75?: double|null,
     *     P50?: double|null,
     *     P10?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
