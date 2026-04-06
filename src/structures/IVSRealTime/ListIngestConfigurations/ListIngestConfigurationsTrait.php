<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListIngestConfigurations;

trait ListIngestConfigurationsTrait
{
    /**
     * @param ListIngestConfigurationsRequest $args
     * @return ListIngestConfigurationsResponse
     */
    public function listIngestConfigurations(ListIngestConfigurationsRequest $args)
    {
        $result = parent::listIngestConfigurations($args->toArray());
        return new ListIngestConfigurationsResponse($result->toArray());
    }
}
