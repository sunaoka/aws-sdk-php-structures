<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowVersions;

trait ListFlowVersionsTrait
{
    /**
     * @param ListFlowVersionsRequest $args
     * @return ListFlowVersionsResponse
     */
    public function listFlowVersions(ListFlowVersionsRequest $args)
    {
        $result = parent::listFlowVersions($args->toArray());
        return new ListFlowVersionsResponse($result->toArray());
    }
}
