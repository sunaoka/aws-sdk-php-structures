<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartEdgeDeploymentStage;

trait StartEdgeDeploymentStageTrait
{
    /**
     * @param StartEdgeDeploymentStageRequest $args
     * @return void
     */
    public function startEdgeDeploymentStage(StartEdgeDeploymentStageRequest $args)
    {
        parent::startEdgeDeploymentStage($args->toArray());
    }
}
