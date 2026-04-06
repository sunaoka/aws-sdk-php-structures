<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextSequenceToken
 * @property Shapes\RejectedLogEventsInfo|null $rejectedLogEventsInfo
 * @property Shapes\RejectedEntityInfo|null $rejectedEntityInfo
 */
class PutLogEventsResponse extends Response
{
}
