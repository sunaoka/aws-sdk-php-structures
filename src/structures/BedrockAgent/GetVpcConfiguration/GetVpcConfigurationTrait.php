<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetVpcConfiguration;

trait GetVpcConfigurationTrait
{
    /**
     * @param GetVpcConfigurationRequest $args
     * @return GetVpcConfigurationResponse
     */
    public function getVpcConfiguration(GetVpcConfigurationRequest $args)
    {
        $result = parent::getVpcConfiguration($args->toArray());
        return new GetVpcConfigurationResponse($result->toArray());
    }
}
