<?php

namespace Sunaoka\Aws\Structures\Ecr\ListReplicationBackfills;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property list<Shapes\ReplicationBackfillSummary>|null $backfills
 * @property string|null $nextToken
 */
class ListReplicationBackfillsResponse extends Response
{
}
