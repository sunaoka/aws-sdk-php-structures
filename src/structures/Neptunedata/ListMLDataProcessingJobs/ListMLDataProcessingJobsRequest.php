<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLDataProcessingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxItems
 * @property string $neptuneIamRoleArn
 */
class ListMLDataProcessingJobsRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int,
     *     neptuneIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
