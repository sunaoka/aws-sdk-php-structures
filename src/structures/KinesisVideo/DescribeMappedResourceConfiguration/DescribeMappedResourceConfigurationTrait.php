<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMappedResourceConfiguration;

trait DescribeMappedResourceConfigurationTrait
{
    /**
     * @param DescribeMappedResourceConfigurationRequest $args
     * @return DescribeMappedResourceConfigurationResponse
     */
    public function describeMappedResourceConfiguration(DescribeMappedResourceConfigurationRequest $args)
    {
        $result = parent::describeMappedResourceConfiguration($args->toArray());
        return new DescribeMappedResourceConfigurationResponse($result->toArray());
    }
}
