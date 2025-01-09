<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'XRay'|'CloudWatchLogs' $Destination
 * @property 'PENDING'|'ACTIVE' $Status
 */
class UpdateTraceSegmentDestinationResponse extends Response
{
}
