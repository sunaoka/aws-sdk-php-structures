<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBrowserSessions;

trait ListBrowserSessionsTrait
{
    /**
     * @param ListBrowserSessionsRequest $args
     * @return ListBrowserSessionsResponse
     */
    public function listBrowserSessions(ListBrowserSessionsRequest $args)
    {
        $result = parent::listBrowserSessions($args->toArray());
        return new ListBrowserSessionsResponse($result->toArray());
    }
}
