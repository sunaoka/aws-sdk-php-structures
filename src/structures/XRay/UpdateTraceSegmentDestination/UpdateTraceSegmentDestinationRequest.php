<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'XRay'|'CloudWatchLogs'|null $Destination
 * @property Shapes\CloudWatchLogsConfiguration|null $CloudWatchLogsConfiguration
 */
class UpdateTraceSegmentDestinationRequest extends Request
{
    /**
     * @param array{
     *     Destination?: 'XRay'|'CloudWatchLogs'|null,
     *     CloudWatchLogsConfiguration?: Shapes\CloudWatchLogsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
