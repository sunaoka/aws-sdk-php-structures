<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TaskSearchSummary> $tasks
 * @property int<0, 10000>|null $nextItemOffset
 * @property int<0, 10000> $totalResults
 */
class SearchTasksResponse extends Response
{
}
