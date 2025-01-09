<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $FleetIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeFleetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     FleetIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
