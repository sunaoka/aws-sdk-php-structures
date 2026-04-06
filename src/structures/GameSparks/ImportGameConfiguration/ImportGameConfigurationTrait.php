<?php

namespace Sunaoka\Aws\Structures\GameSparks\ImportGameConfiguration;

trait ImportGameConfigurationTrait
{
    /**
     * @param ImportGameConfigurationRequest $args
     * @return ImportGameConfigurationResponse
     */
    public function importGameConfiguration(ImportGameConfigurationRequest $args)
    {
        $result = parent::importGameConfiguration($args->toArray());
        return new ImportGameConfigurationResponse($result->toArray());
    }
}
