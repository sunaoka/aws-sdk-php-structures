<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property 'standard'|'convertible'|null $OfferingClass
 * @property list<string>|null $ReservedInstancesIds
 * @property bool|null $DryRun
 * @property 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront'|null $OfferingType
 */
class DescribeReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     OfferingClass?: 'standard'|'convertible'|null,
     *     ReservedInstancesIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     OfferingType?: 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
