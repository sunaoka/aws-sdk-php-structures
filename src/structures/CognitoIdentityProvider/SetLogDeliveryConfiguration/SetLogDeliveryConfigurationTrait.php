<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration;

trait SetLogDeliveryConfigurationTrait
{
    /**
     * @param SetLogDeliveryConfigurationRequest $args
     * @return SetLogDeliveryConfigurationResponse
     */
    public function setLogDeliveryConfiguration(SetLogDeliveryConfigurationRequest $args)
    {
        $result = parent::setLogDeliveryConfiguration($args->toArray());
        return new SetLogDeliveryConfigurationResponse($result->toArray());
    }
}
