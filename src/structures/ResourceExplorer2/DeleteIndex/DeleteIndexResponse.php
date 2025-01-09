<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING' $State
 */
class DeleteIndexResponse extends Response
{
}
