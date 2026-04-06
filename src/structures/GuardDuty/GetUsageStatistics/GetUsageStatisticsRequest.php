<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property 'SUM_BY_ACCOUNT'|'SUM_BY_DATA_SOURCE'|'SUM_BY_RESOURCE'|'TOP_RESOURCES'|'SUM_BY_FEATURES'|'TOP_ACCOUNTS_BY_FEATURE' $UsageStatisticType
 * @property Shapes\UsageCriteria $UsageCriteria
 * @property string|null $Unit
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class GetUsageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     UsageStatisticType: 'SUM_BY_ACCOUNT'|'SUM_BY_DATA_SOURCE'|'SUM_BY_RESOURCE'|'TOP_RESOURCES'|'SUM_BY_FEATURES'|'TOP_ACCOUNTS_BY_FEATURE',
     *     UsageCriteria: Shapes\UsageCriteria,
     *     Unit?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
