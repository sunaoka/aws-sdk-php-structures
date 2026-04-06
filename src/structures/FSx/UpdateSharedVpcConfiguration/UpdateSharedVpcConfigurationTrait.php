<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSharedVpcConfiguration;

trait UpdateSharedVpcConfigurationTrait
{
    /**
     * @param UpdateSharedVpcConfigurationRequest $args
     * @return UpdateSharedVpcConfigurationResponse
     */
    public function updateSharedVpcConfiguration(UpdateSharedVpcConfigurationRequest $args)
    {
        $result = parent::updateSharedVpcConfiguration($args->toArray());
        return new UpdateSharedVpcConfigurationResponse($result->toArray());
    }
}
