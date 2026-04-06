<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager;

trait GetConfigurationManagerTrait
{
    /**
     * @param GetConfigurationManagerRequest $args
     * @return GetConfigurationManagerResponse
     */
    public function getConfigurationManager(GetConfigurationManagerRequest $args)
    {
        $result = parent::getConfigurationManager($args->toArray());
        return new GetConfigurationManagerResponse($result->toArray());
    }
}
