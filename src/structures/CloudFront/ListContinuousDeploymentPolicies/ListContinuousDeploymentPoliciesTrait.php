<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies;

trait ListContinuousDeploymentPoliciesTrait
{
    /**
     * @param ListContinuousDeploymentPoliciesRequest $args
     * @return ListContinuousDeploymentPoliciesResponse
     */
    public function listContinuousDeploymentPolicies(ListContinuousDeploymentPoliciesRequest $args)
    {
        $result = parent::listContinuousDeploymentPolicies($args->toArray());
        return new ListContinuousDeploymentPoliciesResponse($result->toArray());
    }
}
