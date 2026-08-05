<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration;

trait GetDataCatalogExportConfigurationTrait
{
    /**
     * @param GetDataCatalogExportConfigurationRequest $args
     * @return GetDataCatalogExportConfigurationResponse
     */
    public function getDataCatalogExportConfiguration(GetDataCatalogExportConfigurationRequest $args)
    {
        $result = parent::getDataCatalogExportConfiguration($args->toArray());
        return new GetDataCatalogExportConfigurationResponse($result->toArray());
    }
}
