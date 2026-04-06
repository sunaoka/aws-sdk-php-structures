<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentPatternVersions;

trait ListDeploymentPatternVersionsTrait
{
    /**
     * @param ListDeploymentPatternVersionsRequest $args
     * @return ListDeploymentPatternVersionsResponse
     */
    public function listDeploymentPatternVersions(ListDeploymentPatternVersionsRequest $args)
    {
        $result = parent::listDeploymentPatternVersions($args->toArray());
        return new ListDeploymentPatternVersionsResponse($result->toArray());
    }
}
