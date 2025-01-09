<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\MaintenanceWindowFilter> $Filters
 * @property int<10, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowTasksRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     Filters?: list<Shapes\MaintenanceWindowFilter>,
     *     MaxResults?: int<10, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
