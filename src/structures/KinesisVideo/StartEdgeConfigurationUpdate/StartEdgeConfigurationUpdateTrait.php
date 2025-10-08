<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate;

trait StartEdgeConfigurationUpdateTrait
{
    /**
     * @param StartEdgeConfigurationUpdateRequest $args
     * @return StartEdgeConfigurationUpdateResponse
     */
    public function startEdgeConfigurationUpdate(StartEdgeConfigurationUpdateRequest $args)
    {
        $result = parent::startEdgeConfigurationUpdate($args->toArray());
        return new StartEdgeConfigurationUpdateResponse($result->toArray());
    }
}
