<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'COMPLETED'|'ACCEPTED' $status
 * @property list<Shapes\DeleteUniqueIdError> $errors
 * @property list<Shapes\DeletedUniqueId> $deleted
 * @property list<string> $disconnectedUniqueIds
 */
class BatchDeleteUniqueIdResponse extends Response
{
}
