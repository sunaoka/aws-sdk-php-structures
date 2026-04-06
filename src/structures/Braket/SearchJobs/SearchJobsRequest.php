<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchJobsFilter> $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     filters: list<Shapes\SearchJobsFilter>,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
