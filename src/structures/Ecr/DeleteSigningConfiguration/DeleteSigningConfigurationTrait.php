<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteSigningConfiguration;

trait DeleteSigningConfigurationTrait
{
    /**
     * @param DeleteSigningConfigurationRequest $args
     * @return DeleteSigningConfigurationResponse
     */
    public function deleteSigningConfiguration(DeleteSigningConfigurationRequest $args)
    {
        $result = parent::deleteSigningConfiguration($args->toArray());
        return new DeleteSigningConfigurationResponse($result->toArray());
    }
}
