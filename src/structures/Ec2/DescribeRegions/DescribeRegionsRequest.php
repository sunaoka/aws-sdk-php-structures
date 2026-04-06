<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $RegionNames
 * @property bool|null $DryRun
 * @property bool|null $AllRegions
 */
class DescribeRegionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     RegionNames?: list<string>|null,
     *     DryRun?: bool|null,
     *     AllRegions?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
