<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListLoaderJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $limit
 * @property bool $includeQueuedLoads
 */
class ListLoaderJobsRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>,
     *     includeQueuedLoads?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
