<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateIngestConfiguration;

trait CreateIngestConfigurationTrait
{
    /**
     * @param CreateIngestConfigurationRequest $args
     * @return CreateIngestConfigurationResponse
     */
    public function createIngestConfiguration(CreateIngestConfigurationRequest $args)
    {
        $result = parent::createIngestConfiguration($args->toArray());
        return new CreateIngestConfigurationResponse($result->toArray());
    }
}
