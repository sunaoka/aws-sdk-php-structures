<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetAccountConfiguration;

trait GetAccountConfigurationTrait
{
    /**
     * @param GetAccountConfigurationRequest $args
     * @return GetAccountConfigurationResponse
     */
    public function getAccountConfiguration(GetAccountConfigurationRequest $args)
    {
        $result = parent::getAccountConfiguration($args->toArray());
        return new GetAccountConfigurationResponse($result->toArray());
    }
}
