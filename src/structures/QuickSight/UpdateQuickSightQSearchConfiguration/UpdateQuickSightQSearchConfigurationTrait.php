<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateQuickSightQSearchConfiguration;

trait UpdateQuickSightQSearchConfigurationTrait
{
    /**
     * @param UpdateQuickSightQSearchConfigurationRequest $args
     * @return UpdateQuickSightQSearchConfigurationResponse
     */
    public function updateQuickSightQSearchConfiguration(UpdateQuickSightQSearchConfigurationRequest $args)
    {
        $result = parent::updateQuickSightQSearchConfiguration($args->toArray());
        return new UpdateQuickSightQSearchConfigurationResponse($result->toArray());
    }
}
