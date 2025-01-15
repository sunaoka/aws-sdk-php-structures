<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ReplicationJob|null $replicationJob
 * @property list<Shapes\ReplicationRun>|null $replicationRunList
 * @property string|null $nextToken
 */
class GetReplicationRunsResponse extends Response
{
}
