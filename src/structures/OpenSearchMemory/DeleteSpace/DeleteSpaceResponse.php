<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\DeleteSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 */
class DeleteSpaceResponse extends Response
{
}
