<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDomainConfiguration;

trait DeleteDomainConfigurationTrait
{
    /**
     * @param DeleteDomainConfigurationRequest $args
     * @return DeleteDomainConfigurationResponse
     */
    public function deleteDomainConfiguration(DeleteDomainConfigurationRequest $args)
    {
        $result = parent::deleteDomainConfiguration($args->toArray());
        return new DeleteDomainConfigurationResponse($result->toArray());
    }
}
