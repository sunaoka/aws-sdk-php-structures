<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int> $CountBySeverity
 * @property list<AccountStatistics> $GroupedByAccount
 * @property list<DateStatistics> $GroupedByDate
 * @property list<FindingTypeStatistics> $GroupedByFindingType
 * @property list<ResourceStatistics> $GroupedByResource
 * @property list<SeverityStatistics> $GroupedBySeverity
 */
class FindingStatistics extends Shape
{
    /**
     * @param array{
     *     CountBySeverity?: array<string, int>,
     *     GroupedByAccount?: list<AccountStatistics>,
     *     GroupedByDate?: list<DateStatistics>,
     *     GroupedByFindingType?: list<FindingTypeStatistics>,
     *     GroupedByResource?: list<ResourceStatistics>,
     *     GroupedBySeverity?: list<SeverityStatistics>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
