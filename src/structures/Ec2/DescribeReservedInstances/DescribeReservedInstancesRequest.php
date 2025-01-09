<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'standard'|'convertible' $OfferingClass
 * @property list<string> $ReservedInstancesIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront' $OfferingType
 */
class DescribeReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     OfferingClass?: 'standard'|'convertible',
     *     ReservedInstancesIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     OfferingType?: 'Heavy Utilization'|'Medium Utilization'|'Light Utilization'|'No Upfront'|'Partial Upfront'|'All Upfront'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
