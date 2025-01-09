<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListLoaderJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property bool $includeQueuedLoads
 */
class ListLoaderJobsRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
     *     includeQueuedLoads?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
