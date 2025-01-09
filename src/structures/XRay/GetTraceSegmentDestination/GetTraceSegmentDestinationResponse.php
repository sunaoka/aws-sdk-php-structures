<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSegmentDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'XRay'|'CloudWatchLogs' $Destination
 * @property 'PENDING'|'ACTIVE' $Status
 */
class GetTraceSegmentDestinationResponse extends Response
{
}
