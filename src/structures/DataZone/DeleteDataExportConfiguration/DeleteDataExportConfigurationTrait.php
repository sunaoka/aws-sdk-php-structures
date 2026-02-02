<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataExportConfiguration;

trait DeleteDataExportConfigurationTrait
{
    /**
     * @param DeleteDataExportConfigurationRequest $args
     * @return DeleteDataExportConfigurationResponse
     */
    public function deleteDataExportConfiguration(DeleteDataExportConfigurationRequest $args)
    {
        $result = parent::deleteDataExportConfiguration($args->toArray());
        return new DeleteDataExportConfigurationResponse($result->toArray());
    }
}
