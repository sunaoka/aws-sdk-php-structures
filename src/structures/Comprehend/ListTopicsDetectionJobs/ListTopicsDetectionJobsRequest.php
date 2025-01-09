<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTopicsDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TopicsDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTopicsDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TopicsDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
