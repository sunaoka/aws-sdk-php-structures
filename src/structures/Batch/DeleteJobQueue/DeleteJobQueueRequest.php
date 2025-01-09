<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteJobQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobQueue
 */
class DeleteJobQueueRequest extends Request
{
    /**
     * @param array{jobQueue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
