<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateIndexType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING' $State
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class UpdateIndexTypeResponse extends Response
{
}
