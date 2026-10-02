<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListNotifyCodeConfigurations;

trait ListNotifyCodeConfigurationsTrait
{
    /**
     * @param ListNotifyCodeConfigurationsRequest $args
     * @return ListNotifyCodeConfigurationsResponse
     */
    public function listNotifyCodeConfigurations(ListNotifyCodeConfigurationsRequest $args)
    {
        $result = parent::listNotifyCodeConfigurations($args->toArray());
        return new ListNotifyCodeConfigurationsResponse($result->toArray());
    }
}
