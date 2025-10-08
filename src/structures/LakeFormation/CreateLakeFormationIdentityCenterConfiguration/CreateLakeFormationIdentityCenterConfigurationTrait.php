<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationIdentityCenterConfiguration;

trait CreateLakeFormationIdentityCenterConfigurationTrait
{
    /**
     * @param CreateLakeFormationIdentityCenterConfigurationRequest $args
     * @return CreateLakeFormationIdentityCenterConfigurationResponse
     */
    public function createLakeFormationIdentityCenterConfiguration(CreateLakeFormationIdentityCenterConfigurationRequest $args)
    {
        $result = parent::createLakeFormationIdentityCenterConfiguration($args->toArray());
        return new CreateLakeFormationIdentityCenterConfigurationResponse($result->toArray());
    }
}
