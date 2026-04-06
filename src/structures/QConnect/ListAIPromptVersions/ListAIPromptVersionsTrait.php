<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPromptVersions;

trait ListAIPromptVersionsTrait
{
    /**
     * @param ListAIPromptVersionsRequest $args
     * @return ListAIPromptVersionsResponse
     */
    public function listAIPromptVersions(ListAIPromptVersionsRequest $args)
    {
        $result = parent::listAIPromptVersions($args->toArray());
        return new ListAIPromptVersionsResponse($result->toArray());
    }
}
