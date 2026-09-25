<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateVpcConfiguration;

trait CreateVpcConfigurationTrait
{
    /**
     * @param CreateVpcConfigurationRequest $args
     * @return CreateVpcConfigurationResponse
     */
    public function createVpcConfiguration(CreateVpcConfigurationRequest $args)
    {
        $result = parent::createVpcConfiguration($args->toArray());
        return new CreateVpcConfigurationResponse($result->toArray());
    }
}
