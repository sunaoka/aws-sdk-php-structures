<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property 'SUM_BY_ACCOUNT'|'SUM_BY_DATA_SOURCE'|'SUM_BY_RESOURCE'|'TOP_RESOURCES'|'SUM_BY_FEATURES'|'TOP_ACCOUNTS_BY_FEATURE' $UsageStatisticType
 * @property Shapes\UsageCriteria $UsageCriteria
 * @property string $Unit
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetUsageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     UsageStatisticType: 'SUM_BY_ACCOUNT'|'SUM_BY_DATA_SOURCE'|'SUM_BY_RESOURCE'|'TOP_RESOURCES'|'SUM_BY_FEATURES'|'TOP_ACCOUNTS_BY_FEATURE',
     *     UsageCriteria: Shapes\UsageCriteria,
     *     Unit?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
