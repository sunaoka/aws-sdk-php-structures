<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeletedObject> $Deleted
 * @property 'requester' $RequestCharged
 * @property list<Shapes\Error> $Errors
 */
class DeleteObjectsResponse extends Response
{
}
