<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReferenceId
 * @property string|null $Name
 * @property list<string>|null $Names
 * @property bool|null $Root
 * @property string|null $AccountId
 * @property string|null $Type
 * @property string|null $State
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Edge>|null $Edges
 * @property ServiceStatistics|null $SummaryStatistics
 * @property list<HistogramEntry>|null $DurationHistogram
 * @property list<HistogramEntry>|null $ResponseTimeHistogram
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ReferenceId?: int|null,
     *     Name?: string|null,
     *     Names?: list<string>|null,
     *     Root?: bool|null,
     *     AccountId?: string|null,
     *     Type?: string|null,
     *     State?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Edges?: list<Edge>|null,
     *     SummaryStatistics?: ServiceStatistics|null,
     *     DurationHistogram?: list<HistogramEntry>|null,
     *     ResponseTimeHistogram?: list<HistogramEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
