<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransformId
 * @property string $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property string $LogGroupName
 * @property Shapes\TaskRunProperties $Properties
 * @property string $ErrorString
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property int $ExecutionTime
 */
class GetMLTaskRunResponse extends Response
{
}
