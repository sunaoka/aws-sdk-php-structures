<?php

namespace Sunaoka\Aws\Structures\DataZone\StopNotebookRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $owningProjectId
 * @property 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED' $status
 */
class StopNotebookRunResponse extends Response
{
}
