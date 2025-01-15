<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FilteredLogEvent>|null $events
 * @property list<Shapes\SearchedLogStream>|null $searchedLogStreams
 * @property string|null $nextToken
 */
class FilterLogEventsResponse extends Response
{
}
