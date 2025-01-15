<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $exportIds
 * @property list<Shapes\ExportFilter>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     exportIds?: list<string>|null,
     *     filters?: list<Shapes\ExportFilter>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
