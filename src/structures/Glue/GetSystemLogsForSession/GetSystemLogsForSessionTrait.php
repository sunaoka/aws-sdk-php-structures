<?php

namespace Sunaoka\Aws\Structures\Glue\GetSystemLogsForSession;

trait GetSystemLogsForSessionTrait
{
    /**
     * @param GetSystemLogsForSessionRequest $args
     * @return GetSystemLogsForSessionResponse
     */
    public function getSystemLogsForSession(GetSystemLogsForSessionRequest $args)
    {
        $result = parent::getSystemLogsForSession($args->toArray());
        return new GetSystemLogsForSessionResponse($result->toArray());
    }
}
