<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'XRay'|'CloudWatchLogs' $Destination
 */
class UpdateTraceSegmentDestinationRequest extends Request
{
    /**
     * @param array{Destination?: 'XRay'|'CloudWatchLogs'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
