<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<'COUNT_BY_SEVERITY'> $FindingStatisticTypes
 * @property Shapes\FindingCriteria|null $FindingCriteria
 */
class GetFindingsStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingStatisticTypes: list<'COUNT_BY_SEVERITY'>,
     *     FindingCriteria?: Shapes\FindingCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
