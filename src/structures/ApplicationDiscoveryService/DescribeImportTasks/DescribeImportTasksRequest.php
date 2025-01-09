<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeImportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImportTaskFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeImportTasksRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ImportTaskFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
