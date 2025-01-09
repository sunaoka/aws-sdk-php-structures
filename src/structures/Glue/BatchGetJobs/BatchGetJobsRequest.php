<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobNames
 */
class BatchGetJobsRequest extends Request
{
    /**
     * @param array{JobNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
