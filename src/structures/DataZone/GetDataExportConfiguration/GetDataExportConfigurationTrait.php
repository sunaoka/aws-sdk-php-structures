<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataExportConfiguration;

trait GetDataExportConfigurationTrait
{
    /**
     * @param GetDataExportConfigurationRequest $args
     * @return GetDataExportConfigurationResponse
     */
    public function getDataExportConfiguration(GetDataExportConfigurationRequest $args)
    {
        $result = parent::getDataExportConfiguration($args->toArray());
        return new GetDataExportConfigurationResponse($result->toArray());
    }
}
