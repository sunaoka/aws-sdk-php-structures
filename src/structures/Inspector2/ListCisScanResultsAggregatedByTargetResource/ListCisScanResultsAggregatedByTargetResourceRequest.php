<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria|null $filterCriteria
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $scanArn
 * @property 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class ListCisScanResultsAggregatedByTargetResourceRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     scanArn: string,
     *     sortBy?: 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
