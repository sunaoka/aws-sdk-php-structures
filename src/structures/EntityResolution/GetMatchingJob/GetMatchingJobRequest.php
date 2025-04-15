<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string $jobId
 */
class GetMatchingJobRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
