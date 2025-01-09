<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrafficMirrorFilterIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeTrafficMirrorFiltersRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
