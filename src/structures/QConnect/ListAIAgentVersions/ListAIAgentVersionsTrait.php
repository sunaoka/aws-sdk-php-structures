<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions;

trait ListAIAgentVersionsTrait
{
    /**
     * @param ListAIAgentVersionsRequest $args
     * @return ListAIAgentVersionsResponse
     */
    public function listAIAgentVersions(ListAIAgentVersionsRequest $args)
    {
        $result = parent::listAIAgentVersions($args->toArray());
        return new ListAIAgentVersionsResponse($result->toArray());
    }
}
