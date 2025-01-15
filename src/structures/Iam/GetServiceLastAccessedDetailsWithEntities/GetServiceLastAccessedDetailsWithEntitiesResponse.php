<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $JobCreationDate
 * @property \Aws\Api\DateTimeResult $JobCompletionDate
 * @property list<Shapes\EntityDetails> $EntityDetailsList
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 * @property Shapes\ErrorDetails|null $Error
 */
class GetServiceLastAccessedDetailsWithEntitiesResponse extends Response
{
}
