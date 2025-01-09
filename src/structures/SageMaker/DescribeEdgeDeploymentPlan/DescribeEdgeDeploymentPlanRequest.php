<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeEdgeDeploymentPlanRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
