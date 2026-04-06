<?php

namespace Sunaoka\Aws\Structures\Deadline\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 */
class GetJobRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
