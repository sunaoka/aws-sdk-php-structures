<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $taskToken
 * @property int $startedEventId
 * @property Shapes\WorkflowExecution $workflowExecution
 * @property Shapes\WorkflowType $workflowType
 * @property list<Shapes\HistoryEvent> $events
 * @property string $nextPageToken
 * @property int $previousStartedEventId
 */
class PollForDecisionTaskResponse extends Response
{
}
