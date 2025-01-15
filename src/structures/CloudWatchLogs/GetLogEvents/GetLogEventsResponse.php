<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OutputLogEvent>|null $events
 * @property string|null $nextForwardToken
 * @property string|null $nextBackwardToken
 */
class GetLogEventsResponse extends Response
{
}
