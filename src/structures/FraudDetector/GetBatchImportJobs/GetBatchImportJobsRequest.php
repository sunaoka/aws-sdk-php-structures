<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $jobId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class GetBatchImportJobsRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
