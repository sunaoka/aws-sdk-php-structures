<?php

namespace Sunaoka\Aws\Structures\FSx\CancelDataRepositoryTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING'|null $Lifecycle
 * @property string|null $TaskId
 */
class CancelDataRepositoryTaskResponse extends Response
{
}
