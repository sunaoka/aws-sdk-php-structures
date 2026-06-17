<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartThreatModelJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $title
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $threatModelId
 * @property string $threatModelJobId
 * @property string|null $agentSpaceId
 */
class StartThreatModelJobResponse extends Response
{
}
