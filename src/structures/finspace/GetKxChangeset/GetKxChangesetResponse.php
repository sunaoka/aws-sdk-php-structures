<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxChangeset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $changesetId
 * @property string $databaseName
 * @property string $environmentId
 * @property list<Shapes\ChangeRequest> $changeRequests
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $activeFromTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property 'PENDING'|'PROCESSING'|'FAILED'|'COMPLETED' $status
 * @property Shapes\ErrorInfo $errorInfo
 */
class GetKxChangesetResponse extends Response
{
}
