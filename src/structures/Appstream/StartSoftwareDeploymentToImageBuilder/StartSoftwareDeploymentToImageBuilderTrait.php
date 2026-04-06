<?php

namespace Sunaoka\Aws\Structures\Appstream\StartSoftwareDeploymentToImageBuilder;

trait StartSoftwareDeploymentToImageBuilderTrait
{
    /**
     * @param StartSoftwareDeploymentToImageBuilderRequest $args
     * @return StartSoftwareDeploymentToImageBuilderResponse
     */
    public function startSoftwareDeploymentToImageBuilder(StartSoftwareDeploymentToImageBuilderRequest $args)
    {
        $result = parent::startSoftwareDeploymentToImageBuilder($args->toArray());
        return new StartSoftwareDeploymentToImageBuilderResponse($result->toArray());
    }
}
