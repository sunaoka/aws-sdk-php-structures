<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListIntegrations;

trait ListIntegrationsTrait
{
    /**
     * @param ListIntegrationsRequest $args
     * @return ListIntegrationsResponse
     */
    public function listIntegrations(ListIntegrationsRequest $args)
    {
        $result = parent::listIntegrations($args->toArray());
        return new ListIntegrationsResponse($result->toArray());
    }
}
