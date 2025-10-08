<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

trait UpdateEc2DeepInspectionConfigurationTrait
{
    /**
     * @param UpdateEc2DeepInspectionConfigurationRequest $args
     * @return UpdateEc2DeepInspectionConfigurationResponse
     */
    public function updateEc2DeepInspectionConfiguration(UpdateEc2DeepInspectionConfigurationRequest $args)
    {
        $result = parent::updateEc2DeepInspectionConfiguration($args->toArray());
        return new UpdateEc2DeepInspectionConfigurationResponse($result->toArray());
    }
}
