<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $JobCreationDate
 * @property \Aws\Api\DateTimeResult $JobCompletionDate
 * @property list<Shapes\EntityDetails> $EntityDetailsList
 * @property bool $IsTruncated
 * @property string $Marker
 * @property Shapes\ErrorDetails $Error
 */
class GetServiceLastAccessedDetailsWithEntitiesResponse extends Response
{
}
