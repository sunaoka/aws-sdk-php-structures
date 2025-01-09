<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListKeyPhrasesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyPhrasesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListKeyPhrasesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\KeyPhrasesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
