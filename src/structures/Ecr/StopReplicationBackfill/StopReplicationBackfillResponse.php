<?php

namespace Sunaoka\Aws\Structures\Ecr\StopReplicationBackfill;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $replicationBackfillId
 * @property Shapes\ReplicationDestination|null $destination
 * @property 'PREPARING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 */
class StopReplicationBackfillResponse extends Response
{
}
