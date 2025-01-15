<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReferenceId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property EdgeStatistics|null $SummaryStatistics
 * @property list<HistogramEntry>|null $ResponseTimeHistogram
 * @property list<Alias>|null $Aliases
 * @property string|null $EdgeType
 * @property list<HistogramEntry>|null $ReceivedEventAgeHistogram
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     SummaryStatistics?: EdgeStatistics|null,
     *     ResponseTimeHistogram?: list<HistogramEntry>|null,
     *     Aliases?: list<Alias>|null,
     *     EdgeType?: string|null,
     *     ReceivedEventAgeHistogram?: list<HistogramEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
