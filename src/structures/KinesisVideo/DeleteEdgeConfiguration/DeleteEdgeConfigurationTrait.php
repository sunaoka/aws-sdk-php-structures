<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DeleteEdgeConfiguration;

trait DeleteEdgeConfigurationTrait
{
    /**
     * @param DeleteEdgeConfigurationRequest $args
     * @return DeleteEdgeConfigurationResponse
     */
    public function deleteEdgeConfiguration(DeleteEdgeConfigurationRequest $args)
    {
        $result = parent::deleteEdgeConfiguration($args->toArray());
        return new DeleteEdgeConfigurationResponse($result->toArray());
    }
}
