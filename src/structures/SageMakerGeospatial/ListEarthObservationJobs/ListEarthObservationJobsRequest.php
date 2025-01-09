<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListEarthObservationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $StatusEquals
 */
class ListEarthObservationJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SortBy?: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     StatusEquals?: 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
