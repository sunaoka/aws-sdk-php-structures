<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppValidationConfiguration;

trait DeleteAppValidationConfigurationTrait
{
    /**
     * @param DeleteAppValidationConfigurationRequest $args
     * @return DeleteAppValidationConfigurationResponse
     */
    public function deleteAppValidationConfiguration(DeleteAppValidationConfigurationRequest $args)
    {
        $result = parent::deleteAppValidationConfiguration($args->toArray());
        return new DeleteAppValidationConfigurationResponse($result->toArray());
    }
}
