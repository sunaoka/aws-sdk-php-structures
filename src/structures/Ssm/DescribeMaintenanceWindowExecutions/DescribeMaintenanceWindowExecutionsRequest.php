<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\MaintenanceWindowFilter>|null $Filters
 * @property int<10, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
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
