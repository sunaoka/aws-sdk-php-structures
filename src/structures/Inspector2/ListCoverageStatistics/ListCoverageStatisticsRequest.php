<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CoverageFilterCriteria|null $filterCriteria
 * @property 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|'PROVIDER'|'PROVIDER_ACCOUNT_ID'|'PROVIDER_REGION'|'PROVIDER_ORG_ID'|null $groupBy
 * @property string|null $nextToken
 */
class ListCoverageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CoverageFilterCriteria|null,
     *     groupBy?: 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|'PROVIDER'|'PROVIDER_ACCOUNT_ID'|'PROVIDER_REGION'|'PROVIDER_ORG_ID'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
