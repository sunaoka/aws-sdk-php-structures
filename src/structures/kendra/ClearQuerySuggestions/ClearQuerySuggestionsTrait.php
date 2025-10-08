<?php

namespace Sunaoka\Aws\Structures\kendra\ClearQuerySuggestions;

trait ClearQuerySuggestionsTrait
{
    /**
     * @param ClearQuerySuggestionsRequest $args
     * @return void
     */
    public function clearQuerySuggestions(ClearQuerySuggestionsRequest $args)
    {
        parent::clearQuerySuggestions($args->toArray());
    }
}
