<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration;

trait PutDataCatalogExportConfigurationTrait
{
    /**
     * @param PutDataCatalogExportConfigurationRequest $args
     * @return PutDataCatalogExportConfigurationResponse
     */
    public function putDataCatalogExportConfiguration(PutDataCatalogExportConfigurationRequest $args)
    {
        $result = parent::putDataCatalogExportConfiguration($args->toArray());
        return new PutDataCatalogExportConfigurationResponse($result->toArray());
    }
}
