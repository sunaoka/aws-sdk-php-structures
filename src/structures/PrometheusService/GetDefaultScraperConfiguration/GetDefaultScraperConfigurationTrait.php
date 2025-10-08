<?php

namespace Sunaoka\Aws\Structures\PrometheusService\GetDefaultScraperConfiguration;

trait GetDefaultScraperConfigurationTrait
{
    /**
     * @param GetDefaultScraperConfigurationRequest $args
     * @return GetDefaultScraperConfigurationResponse
     */
    public function getDefaultScraperConfiguration(GetDefaultScraperConfigurationRequest $args)
    {
        $result = parent::getDefaultScraperConfiguration($args->toArray());
        return new GetDefaultScraperConfigurationResponse($result->toArray());
    }
}
