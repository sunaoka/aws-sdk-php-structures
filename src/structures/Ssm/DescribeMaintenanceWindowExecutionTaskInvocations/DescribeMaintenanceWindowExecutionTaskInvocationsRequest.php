<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTaskInvocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property string $TaskId
 * @property list<Shapes\MaintenanceWindowFilter> $Filters
 * @property int<10, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowExecutionTaskInvocationsRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     TaskId: string,
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
