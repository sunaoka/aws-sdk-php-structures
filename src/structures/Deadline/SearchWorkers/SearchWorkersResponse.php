<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\WorkerSearchSummary> $workers
 * @property int<0, 10000> $nextItemOffset
 * @property int<0, 10000> $totalResults
 */
class SearchWorkersResponse extends Response
{
}
