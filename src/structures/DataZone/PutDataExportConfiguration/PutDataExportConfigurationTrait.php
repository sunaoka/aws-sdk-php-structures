<?php

namespace Sunaoka\Aws\Structures\DataZone\PutDataExportConfiguration;

trait PutDataExportConfigurationTrait
{
    /**
     * @param PutDataExportConfigurationRequest $args
     * @return PutDataExportConfigurationResponse
     */
    public function putDataExportConfiguration(PutDataExportConfigurationRequest $args)
    {
        $result = parent::putDataExportConfiguration($args->toArray());
        return new PutDataExportConfigurationResponse($result->toArray());
    }
}
