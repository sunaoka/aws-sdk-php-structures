<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDominantLanguageDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DominantLanguageDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListDominantLanguageDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DominantLanguageDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
