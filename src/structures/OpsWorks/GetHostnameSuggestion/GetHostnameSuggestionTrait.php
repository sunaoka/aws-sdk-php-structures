<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GetHostnameSuggestion;

trait GetHostnameSuggestionTrait
{
    /**
     * @param GetHostnameSuggestionRequest $args
     * @return GetHostnameSuggestionResponse
     */
    public function getHostnameSuggestion(GetHostnameSuggestionRequest $args)
    {
        $result = parent::getHostnameSuggestion($args->toArray());
        return new GetHostnameSuggestionResponse($result->toArray());
    }
}
