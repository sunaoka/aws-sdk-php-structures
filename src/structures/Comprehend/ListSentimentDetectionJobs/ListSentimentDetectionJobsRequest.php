<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListSentimentDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SentimentDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListSentimentDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\SentimentDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
