<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int>|null $CountBySeverity
 * @property list<AccountStatistics>|null $GroupedByAccount
 * @property list<DateStatistics>|null $GroupedByDate
 * @property list<FindingTypeStatistics>|null $GroupedByFindingType
 * @property list<ResourceStatistics>|null $GroupedByResource
 * @property list<SeverityStatistics>|null $GroupedBySeverity
 */
class FindingStatistics extends Shape
{
    /**
     * @param array{
     *     CountBySeverity?: array<string, int>|null,
     *     GroupedByAccount?: list<AccountStatistics>|null,
     *     GroupedByDate?: list<DateStatistics>|null,
     *     GroupedByFindingType?: list<FindingTypeStatistics>|null,
     *     GroupedByResource?: list<ResourceStatistics>|null,
     *     GroupedBySeverity?: list<SeverityStatistics>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
