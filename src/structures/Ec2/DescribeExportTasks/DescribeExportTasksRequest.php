<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $ExportTaskIds
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     ExportTaskIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
