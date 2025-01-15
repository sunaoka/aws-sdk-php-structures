<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'XRay'|'CloudWatchLogs'|null $Destination
 */
class UpdateTraceSegmentDestinationRequest extends Request
{
    /**
     * @param array{Destination?: 'XRay'|'CloudWatchLogs'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
