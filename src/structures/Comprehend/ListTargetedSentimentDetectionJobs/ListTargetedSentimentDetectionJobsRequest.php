<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTargetedSentimentDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TargetedSentimentDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListTargetedSentimentDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TargetedSentimentDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
