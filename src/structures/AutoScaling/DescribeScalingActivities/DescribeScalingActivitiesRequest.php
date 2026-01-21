<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScalingActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ActivityIds
 * @property string|null $AutoScalingGroupName
 * @property bool|null $IncludeDeletedGroups
 * @property int|null $MaxRecords
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeScalingActivitiesRequest extends Request
{
    /**
     * @param array{
     *     ActivityIds?: list<string>|null,
     *     AutoScalingGroupName?: string|null,
     *     IncludeDeletedGroups?: bool|null,
     *     MaxRecords?: int|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
