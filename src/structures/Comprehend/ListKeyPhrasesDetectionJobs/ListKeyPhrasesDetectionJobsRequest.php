<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListKeyPhrasesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyPhrasesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListKeyPhrasesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\KeyPhrasesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
