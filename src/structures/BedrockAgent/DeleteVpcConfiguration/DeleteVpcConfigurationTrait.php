<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteVpcConfiguration;

trait DeleteVpcConfigurationTrait
{
    /**
     * @param DeleteVpcConfigurationRequest $args
     * @return DeleteVpcConfigurationResponse
     */
    public function deleteVpcConfiguration(DeleteVpcConfigurationRequest $args)
    {
        $result = parent::deleteVpcConfiguration($args->toArray());
        return new DeleteVpcConfigurationResponse($result->toArray());
    }
}
