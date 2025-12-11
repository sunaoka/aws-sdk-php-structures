<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateTieringConfiguration;

trait UpdateTieringConfigurationTrait
{
    /**
     * @param UpdateTieringConfigurationRequest $args
     * @return UpdateTieringConfigurationResponse
     */
    public function updateTieringConfiguration(UpdateTieringConfigurationRequest $args)
    {
        $result = parent::updateTieringConfiguration($args->toArray());
        return new UpdateTieringConfigurationResponse($result->toArray());
    }
}
