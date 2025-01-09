<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReferenceId
 * @property string $Name
 * @property list<string> $Names
 * @property bool $Root
 * @property string $AccountId
 * @property string $Type
 * @property string $State
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Edge> $Edges
 * @property ServiceStatistics $SummaryStatistics
 * @property list<HistogramEntry> $DurationHistogram
 * @property list<HistogramEntry> $ResponseTimeHistogram
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int,
     *     Name?: string,
     *     Names?: list<string>,
     *     Root?: bool,
     *     AccountId?: string,
     *     Type?: string,
     *     State?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Edges?: list<Edge>,
     *     SummaryStatistics?: ServiceStatistics,
     *     DurationHistogram?: list<HistogramEntry>,
     *     ResponseTimeHistogram?: list<HistogramEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
