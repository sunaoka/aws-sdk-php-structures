<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListCodeInterpreterSessions;

trait ListCodeInterpreterSessionsTrait
{
    /**
     * @param ListCodeInterpreterSessionsRequest $args
     * @return ListCodeInterpreterSessionsResponse
     */
    public function listCodeInterpreterSessions(ListCodeInterpreterSessionsRequest $args)
    {
        $result = parent::listCodeInterpreterSessions($args->toArray());
        return new ListCodeInterpreterSessionsResponse($result->toArray());
    }
}
