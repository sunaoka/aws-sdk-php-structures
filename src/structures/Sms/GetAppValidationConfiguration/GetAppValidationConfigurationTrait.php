<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration;

trait GetAppValidationConfigurationTrait
{
    /**
     * @param GetAppValidationConfigurationRequest $args
     * @return GetAppValidationConfigurationResponse
     */
    public function getAppValidationConfiguration(GetAppValidationConfigurationRequest $args)
    {
        $result = parent::getAppValidationConfiguration($args->toArray());
        return new GetAppValidationConfigurationResponse($result->toArray());
    }
}
