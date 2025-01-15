<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListEarthObservationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|null $StatusEquals
 */
class ListEarthObservationJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     SortBy?: string|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     StatusEquals?: 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
