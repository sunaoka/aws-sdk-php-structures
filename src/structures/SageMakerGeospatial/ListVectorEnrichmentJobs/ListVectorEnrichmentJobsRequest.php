<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListVectorEnrichmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property string $StatusEquals
 */
class ListVectorEnrichmentJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>,
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
