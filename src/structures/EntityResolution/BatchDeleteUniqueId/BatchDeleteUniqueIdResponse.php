<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeletedUniqueId> $deleted
 * @property list<string> $disconnectedUniqueIds
 * @property list<Shapes\DeleteUniqueIdError> $errors
 * @property 'COMPLETED'|'ACCEPTED' $status
 */
class BatchDeleteUniqueIdResponse extends Response
{
}
