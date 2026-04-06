<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateIndexType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class UpdateIndexTypeResponse extends Response
{
}
