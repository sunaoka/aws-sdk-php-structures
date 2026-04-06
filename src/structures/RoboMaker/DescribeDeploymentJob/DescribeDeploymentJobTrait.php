<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeDeploymentJob;

trait DescribeDeploymentJobTrait
{
    /**
     * @param DescribeDeploymentJobRequest $args
     * @return DescribeDeploymentJobResponse
     */
    public function describeDeploymentJob(DescribeDeploymentJobRequest $args)
    {
        $result = parent::describeDeploymentJob($args->toArray());
        return new DescribeDeploymentJobResponse($result->toArray());
    }
}
