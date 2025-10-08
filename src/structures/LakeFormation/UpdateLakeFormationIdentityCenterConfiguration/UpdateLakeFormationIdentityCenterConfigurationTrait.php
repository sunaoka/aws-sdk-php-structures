<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration;

trait UpdateLakeFormationIdentityCenterConfigurationTrait
{
    /**
     * @param UpdateLakeFormationIdentityCenterConfigurationRequest $args
     * @return UpdateLakeFormationIdentityCenterConfigurationResponse
     */
    public function updateLakeFormationIdentityCenterConfiguration(UpdateLakeFormationIdentityCenterConfigurationRequest $args)
    {
        $result = parent::updateLakeFormationIdentityCenterConfiguration($args->toArray());
        return new UpdateLakeFormationIdentityCenterConfigurationResponse($result->toArray());
    }
}
