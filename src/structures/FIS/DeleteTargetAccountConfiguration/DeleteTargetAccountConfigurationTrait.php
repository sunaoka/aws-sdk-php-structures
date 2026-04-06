<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteTargetAccountConfiguration;

trait DeleteTargetAccountConfigurationTrait
{
    /**
     * @param DeleteTargetAccountConfigurationRequest $args
     * @return DeleteTargetAccountConfigurationResponse
     */
    public function deleteTargetAccountConfiguration(DeleteTargetAccountConfigurationRequest $args)
    {
        $result = parent::deleteTargetAccountConfiguration($args->toArray());
        return new DeleteTargetAccountConfigurationResponse($result->toArray());
    }
}
