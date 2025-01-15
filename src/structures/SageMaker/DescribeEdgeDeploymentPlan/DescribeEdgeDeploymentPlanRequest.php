<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property string|null $NextToken
 * @property int<min, 10>|null $MaxResults
 */
class DescribeEdgeDeploymentPlanRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
