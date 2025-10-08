<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRemoteAccessSessions;

trait ListRemoteAccessSessionsTrait
{
    /**
     * @param ListRemoteAccessSessionsRequest $args
     * @return ListRemoteAccessSessionsResponse
     */
    public function listRemoteAccessSessions(ListRemoteAccessSessionsRequest $args)
    {
        $result = parent::listRemoteAccessSessions($args->toArray());
        return new ListRemoteAccessSessionsResponse($result->toArray());
    }
}
