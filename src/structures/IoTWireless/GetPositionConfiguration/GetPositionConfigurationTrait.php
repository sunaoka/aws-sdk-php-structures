<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionConfiguration;

trait GetPositionConfigurationTrait
{
    /**
     * @param GetPositionConfigurationRequest $args
     * @return GetPositionConfigurationResponse
     */
    public function getPositionConfiguration(GetPositionConfigurationRequest $args)
    {
        $result = parent::getPositionConfiguration($args->toArray());
        return new GetPositionConfigurationResponse($result->toArray());
    }
}
