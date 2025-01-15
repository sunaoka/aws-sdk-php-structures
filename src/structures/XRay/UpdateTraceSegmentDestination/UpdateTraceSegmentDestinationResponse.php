<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'XRay'|'CloudWatchLogs'|null $Destination
 * @property 'PENDING'|'ACTIVE'|null $Status
 */
class UpdateTraceSegmentDestinationResponse extends Response
{
}
