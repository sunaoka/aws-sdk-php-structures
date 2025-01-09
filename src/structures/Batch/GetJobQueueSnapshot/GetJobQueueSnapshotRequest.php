<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 */
class GetJobQueueSnapshotRequest extends Request
{
    /**
     * @param array{jobQueue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
