<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloadDeploymentPatterns;

trait ListWorkloadDeploymentPatternsTrait
{
    /**
     * @param ListWorkloadDeploymentPatternsRequest $args
     * @return ListWorkloadDeploymentPatternsResponse
     */
    public function listWorkloadDeploymentPatterns(ListWorkloadDeploymentPatternsRequest $args)
    {
        $result = parent::listWorkloadDeploymentPatterns($args->toArray());
        return new ListWorkloadDeploymentPatternsResponse($result->toArray());
    }
}
