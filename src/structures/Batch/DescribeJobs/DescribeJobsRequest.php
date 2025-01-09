<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobs
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{jobs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
