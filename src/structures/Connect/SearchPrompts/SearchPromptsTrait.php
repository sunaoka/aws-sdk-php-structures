<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts;

trait SearchPromptsTrait
{
    /**
     * @param SearchPromptsRequest $args
     * @return SearchPromptsResponse
     */
    public function searchPrompts(SearchPromptsRequest $args)
    {
        $result = parent::searchPrompts($args->toArray());
        return new SearchPromptsResponse($result->toArray());
    }
}
