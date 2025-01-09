<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $FleetId
 * @property list<Shapes\Filter> $Filters
 */
class DescribeFleetInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     FleetId: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
