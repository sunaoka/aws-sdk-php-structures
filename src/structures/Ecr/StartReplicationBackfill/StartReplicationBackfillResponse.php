<?php

namespace Sunaoka\Aws\Structures\Ecr\StartReplicationBackfill;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $replicationBackfillId
 * @property string|null $registryId
 * @property Shapes\ReplicationDestination|null $destination
 * @property 'PREPARING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 */
class StartReplicationBackfillResponse extends Response
{
}
