<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property list<string>|null $ReplicatingFrom
 * @property list<string>|null $ReplicatingTo
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetIndexResponse extends Response
{
}
