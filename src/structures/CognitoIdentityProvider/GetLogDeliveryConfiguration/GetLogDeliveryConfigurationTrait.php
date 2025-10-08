<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetLogDeliveryConfiguration;

trait GetLogDeliveryConfigurationTrait
{
    /**
     * @param GetLogDeliveryConfigurationRequest $args
     * @return GetLogDeliveryConfigurationResponse
     */
    public function getLogDeliveryConfiguration(GetLogDeliveryConfigurationRequest $args)
    {
        $result = parent::getLogDeliveryConfiguration($args->toArray());
        return new GetLogDeliveryConfigurationResponse($result->toArray());
    }
}
