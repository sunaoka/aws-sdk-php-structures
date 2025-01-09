<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AutoScalingGroupNames
 * @property string $NextToken
 * @property int $MaxRecords
 * @property list<Shapes\Filter> $Filters
 */
class DescribeAutoScalingGroupsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupNames?: list<string>,
     *     NextToken?: string,
     *     MaxRecords?: int,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
