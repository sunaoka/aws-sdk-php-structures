<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RegionNames
 * @property bool $AllRegions
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeRegionsRequest extends Request
{
    /**
     * @param array{
     *     RegionNames?: list<string>,
     *     AllRegions?: bool,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
