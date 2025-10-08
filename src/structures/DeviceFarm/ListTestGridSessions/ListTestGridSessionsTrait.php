<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessions;

trait ListTestGridSessionsTrait
{
    /**
     * @param ListTestGridSessionsRequest $args
     * @return ListTestGridSessionsResponse
     */
    public function listTestGridSessions(ListTestGridSessionsRequest $args)
    {
        $result = parent::listTestGridSessions($args->toArray());
        return new ListTestGridSessionsResponse($result->toArray());
    }
}
