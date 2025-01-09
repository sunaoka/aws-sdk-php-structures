<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEventsDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventsDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListEventsDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EventsDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
