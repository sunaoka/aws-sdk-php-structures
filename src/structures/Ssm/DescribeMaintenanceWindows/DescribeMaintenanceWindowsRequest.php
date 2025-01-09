<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MaintenanceWindowFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\MaintenanceWindowFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
