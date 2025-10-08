<?php

namespace Sunaoka\Aws\Structures\Acm\GetAccountConfiguration;

trait GetAccountConfigurationTrait
{
    /**
     * @return GetAccountConfigurationResponse
     */
    public function getAccountConfiguration()
    {
        $result = parent::getAccountConfiguration();
        return new GetAccountConfigurationResponse($result->toArray());
    }
}
