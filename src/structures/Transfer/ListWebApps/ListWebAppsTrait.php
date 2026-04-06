<?php

namespace Sunaoka\Aws\Structures\Transfer\ListWebApps;

trait ListWebAppsTrait
{
    /**
     * @param ListWebAppsRequest $args
     * @return ListWebAppsResponse
     */
    public function listWebApps(ListWebAppsRequest $args)
    {
        $result = parent::listWebApps($args->toArray());
        return new ListWebAppsResponse($result->toArray());
    }
}
