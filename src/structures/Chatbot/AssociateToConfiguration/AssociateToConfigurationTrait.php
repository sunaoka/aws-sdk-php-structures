<?php

namespace Sunaoka\Aws\Structures\Chatbot\AssociateToConfiguration;

trait AssociateToConfigurationTrait
{
    /**
     * @param AssociateToConfigurationRequest $args
     * @return AssociateToConfigurationResponse
     */
    public function associateToConfiguration(AssociateToConfigurationRequest $args)
    {
        $result = parent::associateToConfiguration($args->toArray());
        return new AssociateToConfigurationResponse($result->toArray());
    }
}
