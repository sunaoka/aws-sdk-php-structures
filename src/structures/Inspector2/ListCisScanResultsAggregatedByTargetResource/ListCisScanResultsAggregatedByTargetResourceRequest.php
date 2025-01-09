<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria $filterCriteria
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $scanArn
 * @property 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class ListCisScanResultsAggregatedByTargetResourceRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByTargetResourceFilterCriteria,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     scanArn: string,
     *     sortBy?: 'RESOURCE_ID'|'FAILED_COUNTS'|'ACCOUNT_ID'|'PLATFORM'|'TARGET_STATUS'|'TARGET_STATUS_REASON',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
