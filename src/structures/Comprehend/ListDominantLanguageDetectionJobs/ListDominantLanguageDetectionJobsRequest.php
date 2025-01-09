<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDominantLanguageDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DominantLanguageDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListDominantLanguageDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DominantLanguageDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
