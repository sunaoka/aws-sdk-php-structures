<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property list<Shapes\MaintenanceWindowFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowExecutionTasksRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     Filters?: list<Shapes\MaintenanceWindowFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
