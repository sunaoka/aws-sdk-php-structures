<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TransformId
 * @property string|null $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property string|null $LogGroupName
 * @property Shapes\TaskRunProperties|null $Properties
 * @property string|null $ErrorString
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property int|null $ExecutionTime
 */
class GetMLTaskRunResponse extends Response
{
}
