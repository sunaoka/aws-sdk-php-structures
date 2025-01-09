<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $exportIds
 * @property list<Shapes\ExportFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>,
     *     filters?: list<Shapes\ExportFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
