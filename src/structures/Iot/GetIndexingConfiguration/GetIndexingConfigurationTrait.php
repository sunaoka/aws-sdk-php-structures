<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration;

trait GetIndexingConfigurationTrait
{
    /**
     * @param GetIndexingConfigurationRequest $args
     * @return GetIndexingConfigurationResponse
     */
    public function getIndexingConfiguration(GetIndexingConfigurationRequest $args)
    {
        $result = parent::getIndexingConfiguration($args->toArray());
        return new GetIndexingConfigurationResponse($result->toArray());
    }
}
