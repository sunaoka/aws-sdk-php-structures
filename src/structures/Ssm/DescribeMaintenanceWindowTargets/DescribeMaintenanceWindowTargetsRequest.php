<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\MaintenanceWindowFilter> $Filters
 * @property int<10, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowTargetsRequest extends Request
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
