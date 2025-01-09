<?php

namespace Sunaoka\Aws\Structures\Swf\PollForActivityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $taskToken
 * @property string $activityId
 * @property int $startedEventId
 * @property Shapes\WorkflowExecution $workflowExecution
 * @property Shapes\ActivityType $activityType
 * @property string $input
 */
class PollForActivityTaskResponse extends Response
{
}
