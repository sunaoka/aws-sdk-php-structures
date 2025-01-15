<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTopicsDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TopicsDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListTopicsDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TopicsDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
