<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UnusedAccessTypeStatistics>|null $unusedAccessTypeStatistics
 * @property list<FindingAggregationAccountDetails>|null $topAccounts
 * @property int|null $totalActiveFindings
 * @property int|null $totalArchivedFindings
 * @property int|null $totalResolvedFindings
 */
class UnusedAccessFindingsStatistics extends Shape
{
    /**
     * @param array{
     *     unusedAccessTypeStatistics?: list<UnusedAccessTypeStatistics>|null,
     *     topAccounts?: list<FindingAggregationAccountDetails>|null,
     *     totalActiveFindings?: int|null,
     *     totalArchivedFindings?: int|null,
     *     totalResolvedFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
