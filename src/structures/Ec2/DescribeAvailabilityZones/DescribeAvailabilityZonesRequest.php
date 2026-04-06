<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ZoneNames
 * @property list<string>|null $ZoneIds
 * @property bool|null $AllAvailabilityZones
 * @property bool|null $DryRun
 */
class DescribeAvailabilityZonesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     ZoneNames?: list<string>|null,
     *     ZoneIds?: list<string>|null,
     *     AllAvailabilityZones?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
