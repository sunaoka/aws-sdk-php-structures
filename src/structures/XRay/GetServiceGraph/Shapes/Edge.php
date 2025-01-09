<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReferenceId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property EdgeStatistics $SummaryStatistics
 * @property list<HistogramEntry> $ResponseTimeHistogram
 * @property list<Alias> $Aliases
 * @property string $EdgeType
 * @property list<HistogramEntry> $ReceivedEventAgeHistogram
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     SummaryStatistics?: EdgeStatistics,
     *     ResponseTimeHistogram?: list<HistogramEntry>,
     *     Aliases?: list<Alias>,
     *     EdgeType?: string,
     *     ReceivedEventAgeHistogram?: list<HistogramEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
