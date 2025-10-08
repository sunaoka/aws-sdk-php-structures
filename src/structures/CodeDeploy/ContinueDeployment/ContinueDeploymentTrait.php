<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ContinueDeployment;

trait ContinueDeploymentTrait
{
    /**
     * @param ContinueDeploymentRequest $args
     * @return void
     */
    public function continueDeployment(ContinueDeploymentRequest $args)
    {
        parent::continueDeployment($args->toArray());
    }
}
