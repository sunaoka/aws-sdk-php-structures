<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AutoScalingGroupNames
 * @property bool|null $IncludeInstances
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeAutoScalingGroupsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupNames?: list<string>|null,
     *     IncludeInstances?: bool|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
