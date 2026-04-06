<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null $CurrentState
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Name
 */
class CreatePipeResponse extends Response
{
}
