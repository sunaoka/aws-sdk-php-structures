<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitorScopeSuggestions;

trait GetMonitorScopeSuggestionsTrait
{
    /**
     * @param GetMonitorScopeSuggestionsRequest $args
     * @return GetMonitorScopeSuggestionsResponse
     */
    public function getMonitorScopeSuggestions(GetMonitorScopeSuggestionsRequest $args)
    {
        $result = parent::getMonitorScopeSuggestions($args->toArray());
        return new GetMonitorScopeSuggestionsResponse($result->toArray());
    }
}
