<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalFindings
 * @property SeverityBreakdown|null $SeverityBreakdown
 * @property list<FindingTypeCount>|null $TopFindingTypes
 * @property list<TimeWindowGroup>|null $ByTimeWindow
 */
class FindingsSummary extends Shape
{
    /**
     * @param array{
     *     TotalFindings?: int|null,
     *     SeverityBreakdown?: SeverityBreakdown|null,
     *     TopFindingTypes?: list<FindingTypeCount>|null,
     *     ByTimeWindow?: list<TimeWindowGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
