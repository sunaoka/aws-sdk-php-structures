<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 10000>|null $nextItemOffset
 * @property int<0, 10000> $totalResults
 * @property list<Shapes\WorkerSearchSummary> $workers
 */
class SearchWorkersResponse extends Response
{
}
