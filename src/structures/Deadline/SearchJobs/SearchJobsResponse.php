<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\JobSearchSummary> $jobs
 * @property int<0, 10000> $nextItemOffset
 * @property int<0, 10000> $totalResults
 */
class SearchJobsResponse extends Response
{
}
