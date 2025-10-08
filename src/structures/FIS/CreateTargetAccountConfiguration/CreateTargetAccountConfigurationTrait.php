<?php

namespace Sunaoka\Aws\Structures\FIS\CreateTargetAccountConfiguration;

trait CreateTargetAccountConfigurationTrait
{
    /**
     * @param CreateTargetAccountConfigurationRequest $args
     * @return CreateTargetAccountConfigurationResponse
     */
    public function createTargetAccountConfiguration(CreateTargetAccountConfigurationRequest $args)
    {
        $result = parent::createTargetAccountConfiguration($args->toArray());
        return new CreateTargetAccountConfigurationResponse($result->toArray());
    }
}
