<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeploymentPatternVersion;

trait GetDeploymentPatternVersionTrait
{
    /**
     * @param GetDeploymentPatternVersionRequest $args
     * @return GetDeploymentPatternVersionResponse
     */
    public function getDeploymentPatternVersion(GetDeploymentPatternVersionRequest $args)
    {
        $result = parent::getDeploymentPatternVersion($args->toArray());
        return new GetDeploymentPatternVersionResponse($result->toArray());
    }
}
