<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScalingActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ActivityIds
 * @property string $AutoScalingGroupName
 * @property bool $IncludeDeletedGroups
 * @property int $MaxRecords
 * @property string $NextToken
 */
class DescribeScalingActivitiesRequest extends Request
{
    /**
     * @param array{
     *     ActivityIds?: list<string>,
     *     AutoScalingGroupName?: string,
     *     IncludeDeletedGroups?: bool,
     *     MaxRecords?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
