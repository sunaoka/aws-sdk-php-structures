<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionVersionArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListBatchInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     solutionVersionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
