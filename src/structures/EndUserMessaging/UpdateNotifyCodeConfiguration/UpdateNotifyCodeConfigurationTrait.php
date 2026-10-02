<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateNotifyCodeConfiguration;

trait UpdateNotifyCodeConfigurationTrait
{
    /**
     * @param UpdateNotifyCodeConfigurationRequest $args
     * @return UpdateNotifyCodeConfigurationResponse
     */
    public function updateNotifyCodeConfiguration(UpdateNotifyCodeConfigurationRequest $args)
    {
        $result = parent::updateNotifyCodeConfiguration($args->toArray());
        return new UpdateNotifyCodeConfigurationResponse($result->toArray());
    }
}
