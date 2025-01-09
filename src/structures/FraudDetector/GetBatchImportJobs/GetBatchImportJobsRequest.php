<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int $maxResults
 * @property string $nextToken
 */
class GetBatchImportJobsRequest extends Request
{
    /**
     * @param array{
     *     jobId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
