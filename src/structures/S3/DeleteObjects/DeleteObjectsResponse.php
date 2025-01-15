<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeletedObject>|null $Deleted
 * @property 'requester'|null $RequestCharged
 * @property list<Shapes\Error>|null $Errors
 */
class DeleteObjectsResponse extends Response
{
}
