<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class DeleteIndexResponse extends Response
{
}
