<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListMemories;

trait ListMemoriesTrait
{
    /**
     * @param ListMemoriesRequest $args
     * @return ListMemoriesResponse
     */
    public function listMemories(ListMemoriesRequest $args)
    {
        $result = parent::listMemories($args->toArray());
        return new ListMemoriesResponse($result->toArray());
    }
}
