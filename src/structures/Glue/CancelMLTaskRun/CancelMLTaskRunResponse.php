<?php

namespace Sunaoka\Aws\Structures\Glue\CancelMLTaskRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TransformId
 * @property string|null $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 */
class CancelMLTaskRunResponse extends Response
{
}
