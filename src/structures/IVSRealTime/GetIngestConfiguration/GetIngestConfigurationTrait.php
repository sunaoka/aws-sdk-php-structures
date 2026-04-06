<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetIngestConfiguration;

trait GetIngestConfigurationTrait
{
    /**
     * @param GetIngestConfigurationRequest $args
     * @return GetIngestConfigurationResponse
     */
    public function getIngestConfiguration(GetIngestConfigurationRequest $args)
    {
        $result = parent::getIngestConfiguration($args->toArray());
        return new GetIngestConfigurationResponse($result->toArray());
    }
}
