<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListKeyPhrasesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyPhrasesDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListKeyPhrasesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\KeyPhrasesDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
