<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchPredictionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int $maxResults
 * @property string $nextToken
 */
class GetBatchPredictionJobsRequest extends Request
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
