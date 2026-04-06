<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQueryHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $scheduledQueryArn
 * @property list<Shapes\TriggerHistoryRecord>|null $triggerHistory
 * @property string|null $nextToken
 */
class GetScheduledQueryHistoryResponse extends Response
{
}
