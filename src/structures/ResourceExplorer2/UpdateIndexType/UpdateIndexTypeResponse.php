<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateIndexType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class UpdateIndexTypeResponse extends Response
{
}
