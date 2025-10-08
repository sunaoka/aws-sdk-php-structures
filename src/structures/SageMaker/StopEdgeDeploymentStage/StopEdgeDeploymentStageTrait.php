<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopEdgeDeploymentStage;

trait StopEdgeDeploymentStageTrait
{
    /**
     * @param StopEdgeDeploymentStageRequest $args
     * @return void
     */
    public function stopEdgeDeploymentStage(StopEdgeDeploymentStageRequest $args)
    {
        parent::stopEdgeDeploymentStage($args->toArray());
    }
}
