<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig;

trait UpdateQuerySuggestionsConfigTrait
{
    /**
     * @param UpdateQuerySuggestionsConfigRequest $args
     * @return void
     */
    public function updateQuerySuggestionsConfig(UpdateQuerySuggestionsConfigRequest $args)
    {
        parent::updateQuerySuggestionsConfig($args->toArray());
    }
}
