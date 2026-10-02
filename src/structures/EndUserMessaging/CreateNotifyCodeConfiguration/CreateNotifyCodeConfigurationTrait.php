<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateNotifyCodeConfiguration;

trait CreateNotifyCodeConfigurationTrait
{
    /**
     * @param CreateNotifyCodeConfigurationRequest $args
     * @return CreateNotifyCodeConfigurationResponse
     */
    public function createNotifyCodeConfiguration(CreateNotifyCodeConfigurationRequest $args)
    {
        $result = parent::createNotifyCodeConfiguration($args->toArray());
        return new CreateNotifyCodeConfigurationResponse($result->toArray());
    }
}
