<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyLakehouseConfiguration;

trait ModifyLakehouseConfigurationTrait
{
    /**
     * @param ModifyLakehouseConfigurationRequest $args
     * @return ModifyLakehouseConfigurationResponse
     */
    public function modifyLakehouseConfiguration(ModifyLakehouseConfigurationRequest $args)
    {
        $result = parent::modifyLakehouseConfiguration($args->toArray());
        return new ModifyLakehouseConfigurationResponse($result->toArray());
    }
}
