<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateOrgEc2DeepInspectionConfiguration;

trait UpdateOrgEc2DeepInspectionConfigurationTrait
{
    /**
     * @param UpdateOrgEc2DeepInspectionConfigurationRequest $args
     * @return UpdateOrgEc2DeepInspectionConfigurationResponse
     */
    public function updateOrgEc2DeepInspectionConfiguration(UpdateOrgEc2DeepInspectionConfigurationRequest $args)
    {
        $result = parent::updateOrgEc2DeepInspectionConfiguration($args->toArray());
        return new UpdateOrgEc2DeepInspectionConfigurationResponse($result->toArray());
    }
}
