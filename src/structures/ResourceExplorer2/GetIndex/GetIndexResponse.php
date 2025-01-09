<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<string> $ReplicatingFrom
 * @property list<string> $ReplicatingTo
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING' $State
 * @property array<string, string> $Tags
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class GetIndexResponse extends Response
{
}
