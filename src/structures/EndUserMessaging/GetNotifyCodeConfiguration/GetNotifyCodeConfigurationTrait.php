<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetNotifyCodeConfiguration;

trait GetNotifyCodeConfigurationTrait
{
    /**
     * @param GetNotifyCodeConfigurationRequest $args
     * @return GetNotifyCodeConfigurationResponse
     */
    public function getNotifyCodeConfiguration(GetNotifyCodeConfigurationRequest $args)
    {
        $result = parent::getNotifyCodeConfiguration($args->toArray());
        return new GetNotifyCodeConfigurationResponse($result->toArray());
    }
}
