<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration;

trait SetRiskConfigurationTrait
{
    /**
     * @param SetRiskConfigurationRequest $args
     * @return SetRiskConfigurationResponse
     */
    public function setRiskConfiguration(SetRiskConfigurationRequest $args)
    {
        $result = parent::setRiskConfiguration($args->toArray());
        return new SetRiskConfigurationResponse($result->toArray());
    }
}
