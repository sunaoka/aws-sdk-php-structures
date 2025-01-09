<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ZoneNames
 * @property list<string> $ZoneIds
 * @property bool $AllAvailabilityZones
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeAvailabilityZonesRequest extends Request
{
    /**
     * @param array{
     *     ZoneNames?: list<string>,
     *     ZoneIds?: list<string>,
     *     AllAvailabilityZones?: bool,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
