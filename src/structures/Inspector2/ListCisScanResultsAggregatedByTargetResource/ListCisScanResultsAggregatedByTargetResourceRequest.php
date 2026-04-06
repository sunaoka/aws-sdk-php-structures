<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanArn
 * @property Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria|null $filterCriteria
 * @property 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCisScanResultsAggregatedByTargetResourceRequest extends Request
{
    /**
     * @param array{
     *     scanArn: string,
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria|null,
     *     sortBy?: 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
