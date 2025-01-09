<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $workflowName
 */
class GetMatchingJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
