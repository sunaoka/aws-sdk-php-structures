<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEventsDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventsDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListEventsDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EventsDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
