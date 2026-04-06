<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIPrompts;

trait ListAIPromptsTrait
{
    /**
     * @param ListAIPromptsRequest $args
     * @return ListAIPromptsResponse
     */
    public function listAIPrompts(ListAIPromptsRequest $args)
    {
        $result = parent::listAIPrompts($args->toArray());
        return new ListAIPromptsResponse($result->toArray());
    }
}
