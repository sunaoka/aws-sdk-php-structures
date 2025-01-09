<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StopDevEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $status
 */
class StopDevEnvironmentResponse extends Response
{
}
