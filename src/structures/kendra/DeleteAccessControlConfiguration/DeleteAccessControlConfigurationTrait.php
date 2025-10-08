<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteAccessControlConfiguration;

trait DeleteAccessControlConfigurationTrait
{
    /**
     * @param DeleteAccessControlConfigurationRequest $args
     * @return DeleteAccessControlConfigurationResponse
     */
    public function deleteAccessControlConfiguration(DeleteAccessControlConfigurationRequest $args)
    {
        $result = parent::deleteAccessControlConfiguration($args->toArray());
        return new DeleteAccessControlConfigurationResponse($result->toArray());
    }
}
