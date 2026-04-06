<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetAccountLevelServiceConfiguration;

trait GetAccountLevelServiceConfigurationTrait
{
    /**
     * @return GetAccountLevelServiceConfigurationResponse
     */
    public function getAccountLevelServiceConfiguration()
    {
        $result = parent::getAccountLevelServiceConfiguration();
        return new GetAccountLevelServiceConfigurationResponse($result->toArray());
    }
}
