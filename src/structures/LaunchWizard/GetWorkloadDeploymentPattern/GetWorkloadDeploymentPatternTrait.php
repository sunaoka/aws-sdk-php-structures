<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern;

trait GetWorkloadDeploymentPatternTrait
{
    /**
     * @param GetWorkloadDeploymentPatternRequest $args
     * @return GetWorkloadDeploymentPatternResponse
     */
    public function getWorkloadDeploymentPattern(GetWorkloadDeploymentPatternRequest $args)
    {
        $result = parent::getWorkloadDeploymentPattern($args->toArray());
        return new GetWorkloadDeploymentPatternResponse($result->toArray());
    }
}
