<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TrafficMirrorFilterIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeTrafficMirrorFiltersRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
