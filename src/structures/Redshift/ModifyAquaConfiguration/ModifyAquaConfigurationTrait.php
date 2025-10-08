<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyAquaConfiguration;

trait ModifyAquaConfigurationTrait
{
    /**
     * @param ModifyAquaConfigurationRequest $args
     * @return ModifyAquaConfigurationResponse
     */
    public function modifyAquaConfiguration(ModifyAquaConfigurationRequest $args)
    {
        $result = parent::modifyAquaConfiguration($args->toArray());
        return new ModifyAquaConfigurationResponse($result->toArray());
    }
}
