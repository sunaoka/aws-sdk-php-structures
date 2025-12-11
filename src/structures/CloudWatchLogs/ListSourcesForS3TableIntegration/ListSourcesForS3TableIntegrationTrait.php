<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSourcesForS3TableIntegration;

trait ListSourcesForS3TableIntegrationTrait
{
    /**
     * @param ListSourcesForS3TableIntegrationRequest $args
     * @return ListSourcesForS3TableIntegrationResponse
     */
    public function listSourcesForS3TableIntegration(ListSourcesForS3TableIntegrationRequest $args)
    {
        $result = parent::listSourcesForS3TableIntegration($args->toArray());
        return new ListSourcesForS3TableIntegrationResponse($result->toArray());
    }
}
