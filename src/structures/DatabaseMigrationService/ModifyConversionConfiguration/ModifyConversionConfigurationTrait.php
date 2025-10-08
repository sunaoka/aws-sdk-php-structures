<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyConversionConfiguration;

trait ModifyConversionConfigurationTrait
{
    /**
     * @param ModifyConversionConfigurationRequest $args
     * @return ModifyConversionConfigurationResponse
     */
    public function modifyConversionConfiguration(ModifyConversionConfigurationRequest $args)
    {
        $result = parent::modifyConversionConfiguration($args->toArray());
        return new ModifyConversionConfigurationResponse($result->toArray());
    }
}
