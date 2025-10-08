<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPartnerApps;

trait ListPartnerAppsTrait
{
    /**
     * @param ListPartnerAppsRequest $args
     * @return ListPartnerAppsResponse
     */
    public function listPartnerApps(ListPartnerAppsRequest $args)
    {
        $result = parent::listPartnerApps($args->toArray());
        return new ListPartnerAppsResponse($result->toArray());
    }
}
