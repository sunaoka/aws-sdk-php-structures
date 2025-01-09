<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $P999
 * @property double $P99
 * @property double $P95
 * @property double $P90
 * @property double $P85
 * @property double $P75
 * @property double $P50
 * @property double $P10
 */
class Latency extends Shape
{
    /**
     * @param array{
     *     P999?: double,
     *     P99?: double,
     *     P95?: double,
     *     P90?: double,
     *     P85?: double,
     *     P75?: double,
     *     P50?: double,
     *     P10?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
