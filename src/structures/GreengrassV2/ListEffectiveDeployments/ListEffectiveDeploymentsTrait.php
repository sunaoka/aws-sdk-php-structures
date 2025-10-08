<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments;

trait ListEffectiveDeploymentsTrait
{
    /**
     * @param ListEffectiveDeploymentsRequest $args
     * @return ListEffectiveDeploymentsResponse
     */
    public function listEffectiveDeployments(ListEffectiveDeploymentsRequest $args)
    {
        $result = parent::listEffectiveDeployments($args->toArray());
        return new ListEffectiveDeploymentsResponse($result->toArray());
    }
}
