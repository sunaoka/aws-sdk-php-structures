<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListVectorEnrichmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property string $StatusEquals
 */
class ListVectorEnrichmentJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SortBy?: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     StatusEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
