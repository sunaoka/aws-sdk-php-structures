<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTargetedSentimentDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TargetedSentimentDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTargetedSentimentDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TargetedSentimentDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
