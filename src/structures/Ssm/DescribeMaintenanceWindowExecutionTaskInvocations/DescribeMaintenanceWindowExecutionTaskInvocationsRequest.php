<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTaskInvocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowExecutionId
 * @property string $TaskId
 * @property list<Shapes\MaintenanceWindowFilter>|null $Filters
 * @property int<10, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowExecutionTaskInvocationsRequest extends Request
{
    /**
     * @param array{
     *     WindowExecutionId: string,
     *     TaskId: string,
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
