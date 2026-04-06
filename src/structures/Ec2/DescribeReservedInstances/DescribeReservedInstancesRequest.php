<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'standard'|'convertible'|null $OfferingClass
 * @property list<string>|null $ReservedInstancesIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront'|null $OfferingType
 */
class DescribeReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     OfferingClass?: 'standard'|'convertible'|null,
     *     ReservedInstancesIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     OfferingType?: 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
