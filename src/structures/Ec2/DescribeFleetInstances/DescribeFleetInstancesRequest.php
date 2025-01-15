<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string $FleetId
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     FleetId: string,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
