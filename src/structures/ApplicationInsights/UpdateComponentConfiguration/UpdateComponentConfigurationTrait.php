<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateComponentConfiguration;

trait UpdateComponentConfigurationTrait
{
    /**
     * @param UpdateComponentConfigurationRequest $args
     * @return UpdateComponentConfigurationResponse
     */
    public function updateComponentConfiguration(UpdateComponentConfigurationRequest $args)
    {
        $result = parent::updateComponentConfiguration($args->toArray());
        return new UpdateComponentConfigurationResponse($result->toArray());
    }
}
