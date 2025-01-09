<?php

namespace Sunaoka\Aws\Structures\FSx\CancelDataRepositoryTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING' $Lifecycle
 * @property string $TaskId
 */
class CancelDataRepositoryTaskResponse extends Response
{
}
