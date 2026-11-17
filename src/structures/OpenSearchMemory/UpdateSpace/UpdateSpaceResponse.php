<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\UpdateSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 */
class UpdateSpaceResponse extends Response
{
}
