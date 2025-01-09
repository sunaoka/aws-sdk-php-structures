<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTopicsDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TopicsDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListTopicsDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TopicsDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
