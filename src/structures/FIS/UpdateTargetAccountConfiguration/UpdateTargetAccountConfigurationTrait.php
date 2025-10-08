<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateTargetAccountConfiguration;

trait UpdateTargetAccountConfigurationTrait
{
    /**
     * @param UpdateTargetAccountConfigurationRequest $args
     * @return UpdateTargetAccountConfigurationResponse
     */
    public function updateTargetAccountConfiguration(UpdateTargetAccountConfigurationRequest $args)
    {
        $result = parent::updateTargetAccountConfiguration($args->toArray());
        return new UpdateTargetAccountConfigurationResponse($result->toArray());
    }
}
