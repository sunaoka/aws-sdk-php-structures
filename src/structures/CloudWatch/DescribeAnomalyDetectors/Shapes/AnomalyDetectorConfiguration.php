<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Range>|null $ExcludedTimeRanges
 * @property string|null $MetricTimezone
 * @property 'FAST'|'NORMAL'|'SLOW'|null $AdaptationSpeed
 * @property 'MINIMAL'|'MODERATE'|'STRICT'|null $OutlierFilteringStrength
 */
class AnomalyDetectorConfiguration extends Shape
{
    /**
     * @param array{
     *     ExcludedTimeRanges?: list<Range>|null,
     *     MetricTimezone?: string|null,
     *     AdaptationSpeed?: 'FAST'|'NORMAL'|'SLOW'|null,
     *     OutlierFilteringStrength?: 'MINIMAL'|'MODERATE'|'STRICT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
