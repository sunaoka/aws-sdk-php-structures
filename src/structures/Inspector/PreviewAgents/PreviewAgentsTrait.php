<?php

namespace Sunaoka\Aws\Structures\Inspector\PreviewAgents;

trait PreviewAgentsTrait
{
    /**
     * @param PreviewAgentsRequest $args
     * @return PreviewAgentsResponse
     */
    public function previewAgents(PreviewAgentsRequest $args)
    {
        $result = parent::previewAgents($args->toArray());
        return new PreviewAgentsResponse($result->toArray());
    }
}
