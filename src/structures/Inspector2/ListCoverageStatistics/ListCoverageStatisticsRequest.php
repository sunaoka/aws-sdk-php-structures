<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CoverageFilterCriteria $filterCriteria
 * @property 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME' $groupBy
 * @property string $nextToken
 */
class ListCoverageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CoverageFilterCriteria,
     *     groupBy?: 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
