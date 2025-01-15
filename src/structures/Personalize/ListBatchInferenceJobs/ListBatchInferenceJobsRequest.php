<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $solutionVersionArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListBatchInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     solutionVersionArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
