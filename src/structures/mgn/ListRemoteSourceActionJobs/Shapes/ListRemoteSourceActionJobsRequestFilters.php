<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $remoteSourceActionJobIDs
 */
class ListRemoteSourceActionJobsRequestFilters extends Shape
{
    /**
     * @param array{remoteSourceActionJobIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
