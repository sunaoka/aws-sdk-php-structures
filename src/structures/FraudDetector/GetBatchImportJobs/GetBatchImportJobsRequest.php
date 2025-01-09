<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class GetBatchImportJobsRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
