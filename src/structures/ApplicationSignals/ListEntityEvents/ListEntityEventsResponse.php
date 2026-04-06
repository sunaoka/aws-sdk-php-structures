<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListEntityEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ChangeEvent> $ChangeEvents
 * @property string|null $NextToken
 */
class ListEntityEventsResponse extends Response
{
}
