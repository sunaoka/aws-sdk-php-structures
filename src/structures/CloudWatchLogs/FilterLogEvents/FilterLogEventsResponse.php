<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FilteredLogEvent> $events
 * @property list<Shapes\SearchedLogStream> $searchedLogStreams
 * @property string $nextToken
 */
class FilterLogEventsResponse extends Response
{
}
