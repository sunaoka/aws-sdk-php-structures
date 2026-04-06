<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration;

trait PutAppValidationConfigurationTrait
{
    /**
     * @param PutAppValidationConfigurationRequest $args
     * @return PutAppValidationConfigurationResponse
     */
    public function putAppValidationConfiguration(PutAppValidationConfigurationRequest $args)
    {
        $result = parent::putAppValidationConfiguration($args->toArray());
        return new PutAppValidationConfigurationResponse($result->toArray());
    }
}
