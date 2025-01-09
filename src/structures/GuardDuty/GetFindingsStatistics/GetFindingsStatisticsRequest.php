<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<'COUNT_BY_SEVERITY'> $FindingStatisticTypes
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property 'ACCOUNT'|'DATE'|'FINDING_TYPE'|'RESOURCE'|'SEVERITY' $GroupBy
 * @property 'ASC'|'DESC' $OrderBy
 * @property int $MaxResults
 */
class GetFindingsStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingStatisticTypes?: list<'COUNT_BY_SEVERITY'>,
     *     FindingCriteria?: Shapes\FindingCriteria,
     *     GroupBy?: 'ACCOUNT'|'DATE'|'FINDING_TYPE'|'RESOURCE'|'SEVERITY',
     *     OrderBy?: 'ASC'|'DESC',
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
