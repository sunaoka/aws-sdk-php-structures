<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeImportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImportTaskFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeImportTasksRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ImportTaskFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
