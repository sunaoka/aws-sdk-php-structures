<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ValidateConfigurationSettings;

trait ValidateConfigurationSettingsTrait
{
    /**
     * @param ValidateConfigurationSettingsRequest $args
     * @return ValidateConfigurationSettingsResponse
     */
    public function validateConfigurationSettings(ValidateConfigurationSettingsRequest $args)
    {
        $result = parent::validateConfigurationSettings($args->toArray());
        return new ValidateConfigurationSettingsResponse($result->toArray());
    }
}
