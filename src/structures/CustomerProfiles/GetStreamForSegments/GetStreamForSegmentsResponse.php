<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetStreamForSegments;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AssociatedAt
 * @property list<Shapes\AssociatedSegment>|null $AssociatedSegments
 * @property string|null $DomainName
 * @property string|null $DestinationArn
 * @property string|null $DestinationRoleArn
 * @property 'RUNNING'|'UNHEALTHY'|'STOPPED'|null $State
 * @property \Aws\Api\DateTimeResult|null $DisassociatedAt
 * @property string|null $FailureReason
 */
class GetStreamForSegmentsResponse extends Response
{
}
