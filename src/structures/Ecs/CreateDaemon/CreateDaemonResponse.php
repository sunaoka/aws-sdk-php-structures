<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateDaemon;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $daemonArn
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $deploymentArn
 */
class CreateDaemonResponse extends Response
{
}
