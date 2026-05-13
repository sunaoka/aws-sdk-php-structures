<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $codeReviewJobIds
 * @property string $agentSpaceId
 */
class BatchGetCodeReviewJobsRequest extends Request
{
    /**
     * @param array{
     *     codeReviewJobIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
