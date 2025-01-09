<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $JobStatus
 * @property 'SERVICE_LEVEL'|'ACTION_LEVEL' $JobType
 * @property \Aws\Api\DateTimeResult $JobCreationDate
 * @property list<Shapes\ServiceLastAccessed> $ServicesLastAccessed
 * @property \Aws\Api\DateTimeResult $JobCompletionDate
 * @property bool $IsTruncated
 * @property string $Marker
 * @property Shapes\ErrorDetails $Error
 */
class GetServiceLastAccessedDetailsResponse extends Response
{
}
