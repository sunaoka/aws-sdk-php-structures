<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListVectorEnrichmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $StatusEquals
 */
class ListVectorEnrichmentJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     SortBy?: string|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     StatusEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
