<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListLoaderJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $limit
 * @property bool|null $includeQueuedLoads
 */
class ListLoaderJobsRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>|null,
     *     includeQueuedLoads?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
