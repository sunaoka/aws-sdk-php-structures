<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MaintenanceWindowFilter>|null $Filters
 * @property int<10, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\MaintenanceWindowFilter>|null,
     *     MaxResults?: int<10, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
