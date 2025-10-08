<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationIdentityCenterConfiguration;

trait DeleteLakeFormationIdentityCenterConfigurationTrait
{
    /**
     * @param DeleteLakeFormationIdentityCenterConfigurationRequest $args
     * @return DeleteLakeFormationIdentityCenterConfigurationResponse
     */
    public function deleteLakeFormationIdentityCenterConfiguration(
        DeleteLakeFormationIdentityCenterConfigurationRequest $args,
    ) {
        $result = parent::deleteLakeFormationIdentityCenterConfiguration($args->toArray());
        return new DeleteLakeFormationIdentityCenterConfigurationResponse($result->toArray());
    }
}
