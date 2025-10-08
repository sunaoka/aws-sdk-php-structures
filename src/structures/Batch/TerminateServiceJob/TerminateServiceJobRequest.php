<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateServiceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $reason
 */
class TerminateServiceJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
