<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchSegmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionVersionArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListBatchSegmentJobsRequest extends Request
{
    /**
     * @param array{
     *     solutionVersionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
