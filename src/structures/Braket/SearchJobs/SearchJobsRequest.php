<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\SearchJobsFilter> $filters
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filters: list<Shapes\SearchJobsFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
