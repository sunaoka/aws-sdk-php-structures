<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 */
class CreateIndexResponse extends Response
{
}
