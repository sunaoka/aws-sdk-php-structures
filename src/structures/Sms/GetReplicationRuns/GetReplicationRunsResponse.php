<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ReplicationJob $replicationJob
 * @property list<Shapes\ReplicationRun> $replicationRunList
 * @property string $nextToken
 */
class GetReplicationRunsResponse extends Response
{
}
