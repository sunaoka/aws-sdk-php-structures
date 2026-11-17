<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateSpaceResponse extends Response
{
}
