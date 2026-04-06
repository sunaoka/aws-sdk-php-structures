<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteIngestConfiguration;

trait DeleteIngestConfigurationTrait
{
    /**
     * @param DeleteIngestConfigurationRequest $args
     * @return DeleteIngestConfigurationResponse
     */
    public function deleteIngestConfiguration(DeleteIngestConfigurationRequest $args)
    {
        $result = parent::deleteIngestConfiguration($args->toArray());
        return new DeleteIngestConfigurationResponse($result->toArray());
    }
}
