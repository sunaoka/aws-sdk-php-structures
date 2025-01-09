<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property int<1, 200> $MaxResults
 * @property string $NextToken
 * @property string $RevisionId
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId?: string,
     *     MaxResults?: int<1, 200>,
     *     NextToken?: string,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
