<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property list<Shapes\MaintenanceWindowFilter>|null $Filters
 * @property int<10, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowExecutionTasksRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     Filters?: list<Shapes\MaintenanceWindowFilter>|null,
     *     MaxResults?: int<10, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
