<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationConfiguration;

trait DeleteRemediationConfigurationTrait
{
    /**
     * @param DeleteRemediationConfigurationRequest $args
     * @return DeleteRemediationConfigurationResponse
     */
    public function deleteRemediationConfiguration(DeleteRemediationConfigurationRequest $args)
    {
        $result = parent::deleteRemediationConfiguration($args->toArray());
        return new DeleteRemediationConfigurationResponse($result->toArray());
    }
}
