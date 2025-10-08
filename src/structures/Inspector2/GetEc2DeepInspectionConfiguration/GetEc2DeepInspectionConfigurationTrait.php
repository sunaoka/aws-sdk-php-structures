<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetEc2DeepInspectionConfiguration;

trait GetEc2DeepInspectionConfigurationTrait
{
    /**
     * @param GetEc2DeepInspectionConfigurationRequest $args
     * @return GetEc2DeepInspectionConfigurationResponse
     */
    public function getEc2DeepInspectionConfiguration(GetEc2DeepInspectionConfigurationRequest $args)
    {
        $result = parent::getEc2DeepInspectionConfiguration($args->toArray());
        return new GetEc2DeepInspectionConfigurationResponse($result->toArray());
    }
}
