<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OutputLogEvent> $events
 * @property string $nextForwardToken
 * @property string $nextBackwardToken
 */
class GetLogEventsResponse extends Response
{
}
