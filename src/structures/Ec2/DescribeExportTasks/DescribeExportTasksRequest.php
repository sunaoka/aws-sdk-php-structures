<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ExportTaskIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     ExportTaskIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
