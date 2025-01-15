<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property Shapes\CoverageFilterCriteria|null $FilterCriteria
 * @property list<'COUNT_BY_RESOURCE_TYPE'|'COUNT_BY_COVERAGE_STATUS'> $StatisticsType
 */
class GetCoverageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FilterCriteria?: Shapes\CoverageFilterCriteria|null,
     *     StatisticsType: list<'COUNT_BY_RESOURCE_TYPE'|'COUNT_BY_COVERAGE_STATUS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
