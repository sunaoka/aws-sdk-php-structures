<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 */
class DeleteIndexResponse extends Response
{
}
