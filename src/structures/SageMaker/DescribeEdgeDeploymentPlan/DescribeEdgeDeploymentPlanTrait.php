<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan;

trait DescribeEdgeDeploymentPlanTrait
{
    /**
     * @param DescribeEdgeDeploymentPlanRequest $args
     * @return DescribeEdgeDeploymentPlanResponse
     */
    public function describeEdgeDeploymentPlan(DescribeEdgeDeploymentPlanRequest $args)
    {
        $result = parent::describeEdgeDeploymentPlan($args->toArray());
        return new DescribeEdgeDeploymentPlanResponse($result->toArray());
    }
}
