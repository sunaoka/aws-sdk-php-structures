<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $critical
 * @property double $high
 * @property double $info
 * @property double $low
 * @property double $medium
 */
class FindingMetricsValuePerSeverity extends Shape
{
    /**
     * @param array{
     *     critical?: double,
     *     high?: double,
     *     info?: double,
     *     low?: double,
     *     medium?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
