<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateQPersonalizationConfiguration;

trait UpdateQPersonalizationConfigurationTrait
{
    /**
     * @param UpdateQPersonalizationConfigurationRequest $args
     * @return UpdateQPersonalizationConfigurationResponse
     */
    public function updateQPersonalizationConfiguration(UpdateQPersonalizationConfigurationRequest $args)
    {
        $result = parent::updateQPersonalizationConfiguration($args->toArray());
        return new UpdateQPersonalizationConfigurationResponse($result->toArray());
    }
}
