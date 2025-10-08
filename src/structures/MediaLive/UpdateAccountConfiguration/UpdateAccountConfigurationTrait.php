<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateAccountConfiguration;

trait UpdateAccountConfigurationTrait
{
    /**
     * @param UpdateAccountConfigurationRequest $args
     * @return UpdateAccountConfigurationResponse
     */
    public function updateAccountConfiguration(UpdateAccountConfigurationRequest $args)
    {
        $result = parent::updateAccountConfiguration($args->toArray());
        return new UpdateAccountConfigurationResponse($result->toArray());
    }
}
