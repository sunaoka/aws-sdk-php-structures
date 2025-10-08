<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEdgeDeploymentStage;

trait DeleteEdgeDeploymentStageTrait
{
    /**
     * @param DeleteEdgeDeploymentStageRequest $args
     * @return void
     */
    public function deleteEdgeDeploymentStage(DeleteEdgeDeploymentStageRequest $args)
    {
        parent::deleteEdgeDeploymentStage($args->toArray());
    }
}
