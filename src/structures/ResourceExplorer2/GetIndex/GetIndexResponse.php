<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<string>|null $ReplicatingFrom
 * @property list<string>|null $ReplicatingTo
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property array<string, string>|null $Tags
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class GetIndexResponse extends Response
{
}
