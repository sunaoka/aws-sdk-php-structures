<?php

namespace Sunaoka\Aws\Structures\Pipes\DeletePipe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'RUNNING'|'STOPPED'|'DELETED'|null $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null $CurrentState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DeletePipeResponse extends Response
{
}
