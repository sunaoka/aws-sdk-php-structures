<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clusterArn
 * @property string $containerArn
 * @property string $containerName
 * @property bool $interactive
 * @property Shapes\Session $session
 * @property string $taskArn
 */
class ExecuteCommandResponse extends Response
{
}
