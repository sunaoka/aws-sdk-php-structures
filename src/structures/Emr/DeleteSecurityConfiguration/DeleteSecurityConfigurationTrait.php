<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteSecurityConfiguration;

trait DeleteSecurityConfigurationTrait
{
    /**
     * @param DeleteSecurityConfigurationRequest $args
     * @return DeleteSecurityConfigurationResponse
     */
    public function deleteSecurityConfiguration(DeleteSecurityConfigurationRequest $args)
    {
        $result = parent::deleteSecurityConfiguration($args->toArray());
        return new DeleteSecurityConfigurationResponse($result->toArray());
    }
}
