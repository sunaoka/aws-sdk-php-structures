<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateLakehouseConfiguration;

trait UpdateLakehouseConfigurationTrait
{
    /**
     * @param UpdateLakehouseConfigurationRequest $args
     * @return UpdateLakehouseConfigurationResponse
     */
    public function updateLakehouseConfiguration(UpdateLakehouseConfigurationRequest $args)
    {
        $result = parent::updateLakehouseConfiguration($args->toArray());
        return new UpdateLakehouseConfigurationResponse($result->toArray());
    }
}
