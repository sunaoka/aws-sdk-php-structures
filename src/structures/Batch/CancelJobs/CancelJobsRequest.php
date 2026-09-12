<?php

namespace Sunaoka\Aws\Structures\Batch\CancelJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobs
 * @property string $reason
 */
class CancelJobsRequest extends Request
{
    /**
     * @param array{
     *     jobs: list<string>,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
