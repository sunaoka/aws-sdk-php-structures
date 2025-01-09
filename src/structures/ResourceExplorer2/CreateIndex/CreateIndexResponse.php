<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'UPDATING' $State
 */
class CreateIndexResponse extends Response
{
}
