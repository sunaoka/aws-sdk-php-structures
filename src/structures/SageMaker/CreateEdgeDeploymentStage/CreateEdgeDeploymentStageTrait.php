<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentStage;

trait CreateEdgeDeploymentStageTrait
{
    /**
     * @param CreateEdgeDeploymentStageRequest $args
     * @return void
     */
    public function createEdgeDeploymentStage(CreateEdgeDeploymentStageRequest $args)
    {
        parent::createEdgeDeploymentStage($args->toArray());
    }
}
