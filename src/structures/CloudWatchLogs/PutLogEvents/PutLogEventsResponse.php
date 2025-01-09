<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextSequenceToken
 * @property Shapes\RejectedLogEventsInfo $rejectedLogEventsInfo
 * @property Shapes\RejectedEntityInfo $rejectedEntityInfo
 */
class PutLogEventsResponse extends Response
{
}
