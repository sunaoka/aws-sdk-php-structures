<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateDaemon;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $daemonArn
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $deploymentArn
 */
class UpdateDaemonResponse extends Response
{
}
