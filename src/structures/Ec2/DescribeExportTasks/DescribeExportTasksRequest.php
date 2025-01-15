<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ExportTaskIds
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     ExportTaskIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
