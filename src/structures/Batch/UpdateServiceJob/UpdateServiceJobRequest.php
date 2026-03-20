<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateServiceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property int $schedulingPriority
 */
class UpdateServiceJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     schedulingPriority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
