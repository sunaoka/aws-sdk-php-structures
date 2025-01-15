<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<'COUNT_BY_SEVERITY'>|null $FindingStatisticTypes
 * @property Shapes\FindingCriteria|null $FindingCriteria
 * @property 'ACCOUNT'|'DATE'|'FINDING_TYPE'|'RESOURCE'|'SEVERITY'|null $GroupBy
 * @property 'ASC'|'DESC'|null $OrderBy
 * @property int<1, 100>|null $MaxResults
 */
class GetFindingsStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingStatisticTypes?: list<'COUNT_BY_SEVERITY'>|null,
     *     FindingCriteria?: Shapes\FindingCriteria|null,
     *     GroupBy?: 'ACCOUNT'|'DATE'|'FINDING_TYPE'|'RESOURCE'|'SEVERITY'|null,
     *     OrderBy?: 'ASC'|'DESC'|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
