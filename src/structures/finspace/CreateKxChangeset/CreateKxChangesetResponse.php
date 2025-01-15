<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxChangeset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $changesetId
 * @property string|null $databaseName
 * @property string|null $environmentId
 * @property list<Shapes\ChangeRequest>|null $changeRequests
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED'|null $status
 * @property Shapes\ErrorInfo|null $errorInfo
 */
class CreateKxChangesetResponse extends Response
{
}
