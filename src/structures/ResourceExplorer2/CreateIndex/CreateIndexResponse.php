<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class CreateIndexResponse extends Response
{
}
