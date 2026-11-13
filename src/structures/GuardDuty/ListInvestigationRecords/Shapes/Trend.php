<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAY'|'WEEK'|'MONTH'|null $Granularity
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property int<0, max>|null $TotalFindings
 * @property list<TimeWindowGroup>|null $ByTimeWindow
 */
class Trend extends Shape
{
    /**
     * @param array{
     *     Granularity?: 'DAY'|'WEEK'|'MONTH'|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     TotalFindings?: int<0, max>|null,
     *     ByTimeWindow?: list<TimeWindowGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
