<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations;

trait ListPackagingConfigurationsTrait
{
    /**
     * @param ListPackagingConfigurationsRequest $args
     * @return ListPackagingConfigurationsResponse
     */
    public function listPackagingConfigurations(ListPackagingConfigurationsRequest $args)
    {
        $result = parent::listPackagingConfigurations($args->toArray());
        return new ListPackagingConfigurationsResponse($result->toArray());
    }
}
