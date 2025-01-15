<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ScalingPlanNames
 * @property int|null $ScalingPlanVersion
 * @property list<Shapes\ApplicationSource>|null $ApplicationSources
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeScalingPlansRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanNames?: list<string>|null,
     *     ScalingPlanVersion?: int|null,
     *     ApplicationSources?: list<Shapes\ApplicationSource>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
