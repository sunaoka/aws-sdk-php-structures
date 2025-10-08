<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateIngestConfiguration;

trait UpdateIngestConfigurationTrait
{
    /**
     * @param UpdateIngestConfigurationRequest $args
     * @return UpdateIngestConfigurationResponse
     */
    public function updateIngestConfiguration(UpdateIngestConfigurationRequest $args)
    {
        $result = parent::updateIngestConfiguration($args->toArray());
        return new UpdateIngestConfigurationResponse($result->toArray());
    }
}
