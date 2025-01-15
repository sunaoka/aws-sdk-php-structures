<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clusterArn
 * @property string|null $containerArn
 * @property string|null $containerName
 * @property bool|null $interactive
 * @property Shapes\Session|null $session
 * @property string|null $taskArn
 */
class ExecuteCommandResponse extends Response
{
}
