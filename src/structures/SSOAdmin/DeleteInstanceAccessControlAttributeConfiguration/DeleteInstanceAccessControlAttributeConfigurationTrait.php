<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteInstanceAccessControlAttributeConfiguration;

trait DeleteInstanceAccessControlAttributeConfigurationTrait
{
    /**
     * @param DeleteInstanceAccessControlAttributeConfigurationRequest $args
     * @return DeleteInstanceAccessControlAttributeConfigurationResponse
     */
    public function deleteInstanceAccessControlAttributeConfiguration(
        DeleteInstanceAccessControlAttributeConfigurationRequest $args,
    ) {
        $result = parent::deleteInstanceAccessControlAttributeConfiguration($args->toArray());
        return new DeleteInstanceAccessControlAttributeConfigurationResponse($result->toArray());
    }
}
