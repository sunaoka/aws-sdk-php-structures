<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ZoneNames
 * @property list<string>|null $ZoneIds
 * @property bool|null $AllAvailabilityZones
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeAvailabilityZonesRequest extends Request
{
    /**
     * @param array{
     *     ZoneNames?: list<string>|null,
     *     ZoneIds?: list<string>|null,
     *     AllAvailabilityZones?: bool|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
