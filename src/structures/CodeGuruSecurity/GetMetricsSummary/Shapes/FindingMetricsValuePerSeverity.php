<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $info
 * @property double|null $low
 * @property double|null $medium
 * @property double|null $high
 * @property double|null $critical
 */
class FindingMetricsValuePerSeverity extends Shape
{
    /**
     * @param array{
     *     info?: double|null,
     *     low?: double|null,
     *     medium?: double|null,
     *     high?: double|null,
     *     critical?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
