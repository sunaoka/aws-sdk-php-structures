<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSegmentDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'XRay'|'CloudWatchLogs'|null $Destination
 * @property 'PENDING'|'ACTIVE'|null $Status
 */
class GetTraceSegmentDestinationResponse extends Response
{
}
