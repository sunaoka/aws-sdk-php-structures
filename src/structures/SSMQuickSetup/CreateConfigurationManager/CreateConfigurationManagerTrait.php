<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\CreateConfigurationManager;

trait CreateConfigurationManagerTrait
{
    /**
     * @param CreateConfigurationManagerRequest $args
     * @return CreateConfigurationManagerResponse
     */
    public function createConfigurationManager(CreateConfigurationManagerRequest $args)
    {
        $result = parent::createConfigurationManager($args->toArray());
        return new CreateConfigurationManagerResponse($result->toArray());
    }
}
