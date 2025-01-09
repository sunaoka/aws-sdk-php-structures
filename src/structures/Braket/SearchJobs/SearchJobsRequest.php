<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchJobsFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     filters: list<Shapes\SearchJobsFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
