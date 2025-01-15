<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DataSetId
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $RevisionId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId?: string|null,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
