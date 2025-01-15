<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $FleetIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeFleetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     FleetIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
