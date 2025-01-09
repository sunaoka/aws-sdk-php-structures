<?php

namespace Sunaoka\Aws\Structures\Glue\CancelMLTaskRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransformId
 * @property string $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 */
class CancelMLTaskRunResponse extends Response
{
}
