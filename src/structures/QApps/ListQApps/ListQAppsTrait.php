<?php

namespace Sunaoka\Aws\Structures\QApps\ListQApps;

trait ListQAppsTrait
{
    /**
     * @param ListQAppsRequest $args
     * @return ListQAppsResponse
     */
    public function listQApps(ListQAppsRequest $args)
    {
        $result = parent::listQApps($args->toArray());
        return new ListQAppsResponse($result->toArray());
    }
}
