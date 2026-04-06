<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RegionNames
 * @property bool|null $AllRegions
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeRegionsRequest extends Request
{
    /**
     * @param array{
     *     RegionNames?: list<string>|null,
     *     AllRegions?: bool|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
