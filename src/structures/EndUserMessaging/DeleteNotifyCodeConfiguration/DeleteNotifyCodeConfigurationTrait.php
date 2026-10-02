<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteNotifyCodeConfiguration;

trait DeleteNotifyCodeConfigurationTrait
{
    /**
     * @param DeleteNotifyCodeConfigurationRequest $args
     * @return DeleteNotifyCodeConfigurationResponse
     */
    public function deleteNotifyCodeConfiguration(DeleteNotifyCodeConfigurationRequest $args)
    {
        $result = parent::deleteNotifyCodeConfiguration($args->toArray());
        return new DeleteNotifyCodeConfigurationResponse($result->toArray());
    }
}
