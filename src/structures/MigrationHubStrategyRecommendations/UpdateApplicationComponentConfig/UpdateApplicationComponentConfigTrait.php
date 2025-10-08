<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateApplicationComponentConfig;

trait UpdateApplicationComponentConfigTrait
{
    /**
     * @param UpdateApplicationComponentConfigRequest $args
     * @return UpdateApplicationComponentConfigResponse
     */
    public function updateApplicationComponentConfig(UpdateApplicationComponentConfigRequest $args)
    {
        $result = parent::updateApplicationComponentConfig($args->toArray());
        return new UpdateApplicationComponentConfigResponse($result->toArray());
    }
}
