<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeReplicationBackfillResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $replicationBackfillId
 * @property Shapes\ReplicationDestination|null $destination
 * @property 'PREPARING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED'|null $status
 * @property string|null $failureCode
 * @property Shapes\ReplicationBackfillProgress|null $progress
 * @property list<Shapes\ReplicationBackfillResult>|null $results
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string|null $nextToken
 */
class DescribeReplicationBackfillResultsResponse extends Response
{
}
