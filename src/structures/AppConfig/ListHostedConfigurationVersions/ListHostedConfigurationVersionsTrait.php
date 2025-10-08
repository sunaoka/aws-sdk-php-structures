<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListHostedConfigurationVersions;

trait ListHostedConfigurationVersionsTrait
{
    /**
     * @param ListHostedConfigurationVersionsRequest $args
     * @return ListHostedConfigurationVersionsResponse
     */
    public function listHostedConfigurationVersions(ListHostedConfigurationVersionsRequest $args)
    {
        $result = parent::listHostedConfigurationVersions($args->toArray());
        return new ListHostedConfigurationVersionsResponse($result->toArray());
    }
}
