<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration;

trait UpdateDomainConfigurationTrait
{
    /**
     * @param UpdateDomainConfigurationRequest $args
     * @return UpdateDomainConfigurationResponse
     */
    public function updateDomainConfiguration(UpdateDomainConfigurationRequest $args)
    {
        $result = parent::updateDomainConfiguration($args->toArray());
        return new UpdateDomainConfigurationResponse($result->toArray());
    }
}
